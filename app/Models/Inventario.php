<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $table = 'inventario';

    protected $fillable = [
        'item',
        'cantidad',
        'ubicacion',
    ];

    public $timestamps = true;
}
