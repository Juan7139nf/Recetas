<?php

namespace App\Livewire\Site\Order;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Recipe;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;

class Confirm extends Component
{
    public $orden;
    public $detalles = [];

    public function mount()
    {
        $user = Auth::user();

        $this->orden = Order::where('user_id', $user->id)
            ->where('status', 'pendiente')
            ->with('orderDetails.recipe') // Asegúrate de tener esta relación en el modelo
            ->first();

        if ($this->orden) {
            $this->detalles = $this->orden->orderDetails;
        }
    }

    public function confirmarOrden()
    {
        if (!$this->orden || $this->orden->status !== 'pendiente') {
            session()->flash('error', 'No hay orden pendiente para confirmar.');
            return;
        }

        $this->orden->status = 'confirmado';
        $this->orden->ordered_at = now(); // ya lo tienes, pero puedes actualizarlo si quieres
        $this->orden->save();

        session()->flash('success', '¡Orden confirmada correctamente!');

        return redirect()->route('home'); // o a donde quieras redirigir
    }

    public function agregarReceta($id)
    {
        $user = Auth::user();
        $recipe = Recipe::findOrFail($id);

        if (!$recipe->price || $recipe->price <= 0) {
            return back()->with('error', 'Esta receta no puede ser añadida al pedido.');
        }

        // Buscar orden pendiente del usuario
        $orden = Order::where('user_id', $user->id)
            ->where('status', 'pendiente')
            ->first();

        if (!$orden) {
            // Crear nueva orden
            $orden = Order::create([
                'id' => (string) Str::uuid(),
                'user_id' => $user->id,
                'total' => 0,
                'status' => 'pendiente',
                'ordered_at' => now(),
            ]);
        }

        // Agregar detalle (sin verificar si ya está en el pedido)
        OrderDetail::create([
            'id' => (string) Str::uuid(),
            'order_id' => $orden->id,
            'recipe_id' => $recipe->id,
            'price' => $recipe->price,
        ]);

        // Actualizar total
        $orden->total += $recipe->price;
        $orden->save();

        return redirect()->back()->with('success', 'Receta añadida al pedido.');
    }

    public function eliminarDetalle($detalleId)
    {
        $detalle = OrderDetail::findOrFail($detalleId);

        if ($detalle->order_id !== $this->orden->id) {
            return;
        }

        // Restar el precio del total
        $this->orden->total -= $detalle->price;
        $this->orden->save();

        $detalle->delete();

        // Actualizar la lista
        $this->detalles = $this->orden->fresh()->orderDetails;

        session()->flash('success', 'Receta eliminada del pedido.');
    }

    public function render()
    {
        return view('livewire.site.order.confirm')
            ->layout('layouts.master', [
                'title' => __('auth.register_step1'),
                'header' => 2,
            ]);
    }
}
