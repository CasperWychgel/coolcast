<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCopyLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('copy_location', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('location_id');

            $table->unsignedBigInteger('copy_id');

            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');

            $table->foreign('copy_id')->references('id')->on('copies')->onDelete('cascade');

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
        Schema::dropIfExists('copy_location');
    }
}
