<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'codigo_rastreo',
        'total',
        'cantidad_items',
        'pagado'
    ];
}