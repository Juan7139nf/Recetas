<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OrdenController extends Controller
{
    public function agregar(Request $request, $id)
    {
        $user = auth()->user();
        $recipe = Recipe::findOrFail($id);

        if (!$recipe->price || $recipe->price <= 0) {
            return back()->with('error', 'Esta receta no tiene un precio válido.');
        }

        // Obtener o crear orden pendiente
        $orden = Order::firstOrCreate(
            ['user_id' => $user->id, 'status' => 'pendiente'],
            ['id' => (string) Str::uuid(), 'total' => 0, 'ordered_at' => now()]
        );

        // Buscar si ya existe el detalle
        $detalle = OrderDetail::where('order_id', $orden->id)
            ->where('recipe_id', $id)
            ->first();

        if (!$detalle) {
            // Crear detalle si no existe
            OrderDetail::create([
                'id' => (string) Str::uuid(),
                'order_id' => $orden->id,
                'recipe_id' => $id,
                'price' => $recipe->price,
            ]);

            // Sumar al total de la orden
            $orden->total += $recipe->price;
            $orden->save();
        } else {
            // Si ya existe, actualizamos el precio si es diferente
            if ($detalle->price != $recipe->price) {
                // Restar el viejo y sumar el nuevo al total
                $orden->total -= $detalle->price;
                $orden->total += $recipe->price;
                $orden->save();

                $detalle->price = $recipe->price;
                $detalle->save();
            }
        }

        return back()->with('success', 'Receta añadida al carrito.');
    }

}
