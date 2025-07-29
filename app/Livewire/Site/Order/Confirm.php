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
            ->with('orderDetails.recipe') // asegúrate que esta relación existe
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
        $this->orden->ordered_at = now();
        $this->orden->save();

        session()->flash('success', '¡Orden confirmada correctamente!');

        return redirect()->route('home');
    }

    public function agregarReceta($id)
    {
        $user = Auth::user();
        $recipe = Recipe::findOrFail($id);

        // Validar que el precio es numérico y mayor que 0
        if (!is_numeric($recipe->price) || $recipe->price <= 0) {
            session()->flash('error', 'Esta receta no puede ser añadida al pedido.');
            return redirect()->back();
        }

        $orden = Order::where('user_id', $user->id)
            ->where('status', 'pendiente')
            ->first();

        if (!$orden) {
            $orden = Order::create([
                'id' => (string) Str::uuid(),
                'user_id' => $user->id,
                'total' => 0,
                'status' => 'pendiente',
                'ordered_at' => now(),
            ]);
        }

        OrderDetail::create([
            'id' => (string) Str::uuid(),
            'order_id' => $orden->id,
            'recipe_id' => $recipe->id,
            'price' => $recipe->price,
        ]);

        // Asegurarse de que total sea float antes de sumar
        $orden->total = (float) $orden->total + (float) $recipe->price;
        $orden->save();

        session()->flash('success', 'Receta añadida al pedido.');
        return redirect()->back();
    }

    public function eliminarDetalle($detalleId)
    {
        $detalle = OrderDetail::findOrFail($detalleId);

        if ($detalle->order_id !== $this->orden->id) {
            return;
        }

        $this->orden->total = (float) $this->orden->total - (float) $detalle->price;
        $this->orden->save();

        $detalle->delete();

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
