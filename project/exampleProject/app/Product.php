<?php

namespace App;

use Illuminate\Database\Eloquent\Factory;
use Illuminate\Database\Eloquent\Model;
use Database\Factories\ProductFactory;

class Product extends Model
{
    public $table = 'products';

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'category_id',
        'product_name',
        'product_description',
        'price',
        'created_at',
        'updated_at'
    ];

    public function category() {
        return $this->belongsTo(Category::class, "category_id", "id");
    }
}
