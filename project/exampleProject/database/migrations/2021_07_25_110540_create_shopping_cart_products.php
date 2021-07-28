<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShoppingCartProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopping_cart_products', function (Blueprint $table) {
            $table->id();
            $table->integer('shopping_cart_id');
            $table->integer('product_id');
            $table->integer('amount');
            $table->timestamps();
            $table->foreign('shopping_cart_id')->references('id')->on('shopping_carts');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign('shopping_cart_products_shopping_cart_id_foreign');
        $table->dropForeign('shopping_cart_products_product_id_foreign');
        Schema::dropIfExists('shopping_cart_products');
    }
}
