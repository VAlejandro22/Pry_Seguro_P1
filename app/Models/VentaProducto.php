<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Producto;

class VentaProducto extends Model
{
    protected $fillable = ['venta_id', 'producto_id', 'cantidad'];

    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }

    public function venta()
    {
        return $this->belongsTo(Venta::class);
    }
}
