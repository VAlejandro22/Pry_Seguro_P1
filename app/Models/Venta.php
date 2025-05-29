<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\VentaProducto;

class Venta extends Model
{
    protected $fillable = ['user_id'];

    public function productos()
    {
        return $this->hasMany(VentaProducto::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

