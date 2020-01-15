<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCopyProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('copy_product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('copy_id');

            $table->unsignedBigInteger('product_id');

            $table->foreign('copy_id')->references('id')->on('copies');

            $table->foreign('product_id')->references('id')->on('products');

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
        Schema::dropIfExists('copy_product');
    }
}
