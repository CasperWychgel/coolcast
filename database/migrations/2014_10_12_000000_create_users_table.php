<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 40);
            $table->string('email', 100)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert([
            ['name' => 'John Doe','email' => 'john.doe@gmail.com','password' => '$2y$10$neCdIx2jPNopo1/E3HBZhul3ydVj53gyOFmfAIIMGOHArDYTUR9wy'],
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
        Schema::dropIfExists('users');
    }
}
