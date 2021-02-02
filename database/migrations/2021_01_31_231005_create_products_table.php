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
            $table->string('name', 100)->comment('The name of the product ');
            $table->decimal('price', $precision = 8, $scale = 4);
            $table->timestamps();
            // $table->foreignId('category_id');
            // $table->foreign('category_id')
            // ->references('id')
            // ->on('categories')
            // ->onDelete('cascade');
            $table->foreignId('category_id')->constrained('categories')
            ->onUpdate('cascade')->onDelete('cascade');
            // $table->in('cagegory_id');
            // $table->foreign('category_id')->references('id')->on('categories');
         

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
