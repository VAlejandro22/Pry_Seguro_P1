<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\VentaProducto;
use App\Models\Producto;


class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ventas = Venta::with('productos.producto')->where('user_id', auth()->id())->get();
        return view('ventas.index', compact('ventas'));
    }

    public function create()
    {
        $productos = Producto::where('stock', '>', 0)->get();
        return view('ventas.create', compact('productos'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'productos' => 'required|array',
            'productos.*.cantidad' => 'required|integer|min:1',
        ]);

        $venta = Venta::create(['user_id' => auth()->id()]);

        foreach ($data['productos'] as $producto_id => $item) {
            $producto = Producto::findOrFail($producto_id);

            if ($producto->stock < $item['cantidad']) {
                return back()->withErrors(['stock' => "Stock insuficiente para el producto {$producto->nombre}."]);
            }

            $producto->decrement('stock', $item['cantidad']);

            VentaProducto::create([
                'venta_id' => $venta->id,
                'producto_id' => $producto_id,
                'cantidad' => $item['cantidad'],
            ]);
        }

        return redirect()->route('ventas.index')->with('success', 'Venta registrada con éxito.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
