<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateProductTableProperties extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string("product_name", 40)->after("id");
            $table->string("product_description", 200)->after("product_name");
            $table->double("price", 10, 2)->after("product_description");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // drops the created collums
        Schema::table('products', function($table) {
            $table->dropColumn([
                'product_name',
                'product_description',
                'price'
            ]);
        });
    }
}
