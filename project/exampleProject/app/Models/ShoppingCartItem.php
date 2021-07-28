<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShoppingCartItem extends Model
{

    public $table = 'shopping_cart_products';

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'shopping_cart_id',
        'product_id',
        'created_at',
        'updated_at'
    ];

    public function shoppingCart() {
        return $this->belongsToMany(ShoppingCartItem::class, 'id', 'shopping_cart_id');
    }

    public function items() {
        return $this->hasMany(Product::class);
    }
}
