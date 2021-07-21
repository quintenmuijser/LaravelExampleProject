<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCategoryTableProperties extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            // creates the tables category_name and category_description
            $table->string("category_name", 40)->after("id");
            $table->string("category_description", 200)->after("category_name");
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
            // deletes the created columns from this migration incase of needing to revert
            $table->dropColumn([
                'category_name',
                'category_description'
            ]);
        });
    }
}
