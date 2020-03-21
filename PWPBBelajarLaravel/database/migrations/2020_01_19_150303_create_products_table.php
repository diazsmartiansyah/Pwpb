<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->bigInteger('supplierId')->unsigned();
            $table->String('name');
            $table->String('category');
            $table->float('price');
            $table->integer('stock');
            $table->text('description');
            $table->String('picture');
            $table->timestamps();
            
            $table->foreign('supplierId')
                  ->references('id')
                  ->on('users')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
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
