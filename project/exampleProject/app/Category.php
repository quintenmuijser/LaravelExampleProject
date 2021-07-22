<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = 'categories';

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'category_name',
        'category_description',
        'created_at',
        'updated_at'
    ];

    public function Products() {
        return $this->hasMany(Product::class);
    }
}
