<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationUserproductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_userproduct', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('userproduct_id');

            $table->unsignedBigInteger('location_id');

            $table->foreign('userproduct_id')->references('id')->on('userproducts');

            $table->foreign('location_id')->references('id')->on('locations');


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
        Schema::dropIfExists('location_userproduct');
    }
}
