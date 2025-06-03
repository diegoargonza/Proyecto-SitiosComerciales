<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends Model
{

    use SoftDeletes; 
    protected $fillable = ['category_id', 'name', 'fecha', 'subtotal',
        'iva', 'cantidad', 'total', 'is_status', 'observaciones' ];


    
}
