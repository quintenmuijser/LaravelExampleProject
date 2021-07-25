<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    public $table = 'shopping_carts';

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'session_id',
        'created_at',
        'updated_at'
    ];
}
