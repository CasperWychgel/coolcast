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
            $table->bigIncrements('id');
            $table->string('name', 40);
            $table->integer('expiresafter');
            $table->boolean("risico");
            $table->string("category", 40);
        });
        DB::table('products')->insert([
            ['name' => 'De Zaanse Hoeve Yoghurt Griekse stijl','expiresafter' => 8,'risico' => 1,'category'=> 'zuivel'],
            ['name' => 'De Zaanse Hoeve Kaas mild 45+','expiresafter' => 6,'risico' => 0,'category'=> 'zuivel'],
            ['name' => 'AH Scharreleieren klasse M','expiresafter' => 14,'risico' => 01,'category'=> 'ei'],
            ['name' => 'AH Aardappelpartjes','expiresafter' => 7,'risico' => 0,'category'=> 'groente'],
            ['name' => 'Dr. Oetker Ristorante pizza mozzarella','expiresafter' => 8,'risico' => 0,'category'=> 'diepvries'],
        ]);
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
