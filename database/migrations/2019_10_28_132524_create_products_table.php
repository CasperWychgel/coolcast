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
        });
        DB::table('products')->insert([
            ['name' => 'Jumbo Yoghurt Griekse stijl','expiresafter' => 28],
            ['name' => 'Jumbo Half volle melk','expiresafter' => 7],
            ['name' => 'Jumbo Scharreleieren klasse A','expiresafter' => 20],
            ['name' => 'Vitador fritesaus halfvol','expiresafter' => 120],
            ['name' => 'Bolletje ontbijt crackers spelt volkoren','expiresafter' => 120],
            ['name' => 'Fuzetea Green Tea','expiresafter' => 160],
            ['name' => 'Jumbo Appel Nectar','expiresafter' => 80],
            ['name' => 'Jumbo Knäckebröd Volkoren','expiresafter' => 90],
            ['name' => 'Tommies snoeptomaten','expiresafter' => 14],
            ['name' => 'Jumbo Vruchtenthee Variatie mix','expiresafter' => 912],
            ['name' => 'Protein Milk drink','expiresafter' => 14],
            ['name' => 'Pils van Roel','expiresafter' => 2],
            ['name' => 'Pils van Jurgen','expiresafter' => -3],


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
