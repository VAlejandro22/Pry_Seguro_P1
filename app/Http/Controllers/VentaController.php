<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\VentaProducto;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'productos' => 'required|array',
        'productos.*.id' => 'exists:productos,id',
        'productos.*.cantidad' => 'required|integer|min:1'
    ]);

    $venta = Venta::create([
        'user_id' => auth()->id(),
    ]);

    foreach ($request->productos as $item) {
        VentaProducto::create([
            'venta_id' => $venta->id,
            'producto_id' => $item['id'],
            'cantidad' => $item['cantidad'],
        ]);
    }

    return redirect()->route('ventas.index');
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
