<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('name');
            $table->string('slug');
            $table->float('price_before_sale')->nullable();
            $table->integer('discount')->nullable();
            $table->float('price');
            $table->text('description');
            $table->string('weight');
            $table->string('quantity');
            $table->boolean('is_avail')->default(true);
            $table->boolean('is_free_shipping')->default(true);
            $table->boolean('is_sale')->default(false);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
