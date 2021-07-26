<?php

namespace App\Models;

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

    public function shoppingCartItems() {
        return $this->hasMany(ShoppingCartItem::class);
    }
}
