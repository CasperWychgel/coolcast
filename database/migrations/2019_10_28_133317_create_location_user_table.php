<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationuserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('location_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('location_id');
            $table->foreign('location_id')->references('id')->on('locations');
            $table->timestamps();
        });

        DB::table('users')->insert([
            ['name' => 'Test','email' => 'test@test.nl','password' => '$2y$10$odXzj0bYNBiBwDcQBEpB1.HgkzG1nY0oedG4DXrwBqZxLs5IUmZ2S'],
            ['name' => 'Test2','email' => 'test2@test.nl','password' => '$2y$10$odXzj0bYNBiBwDcQBEpB1.HgkzG1nY0oedG4DXrwBqZxLs5IUmZ2S']
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('location_user');
    }
}
