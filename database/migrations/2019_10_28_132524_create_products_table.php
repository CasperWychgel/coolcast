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
            $table->integer('expires-after');
        });
        DB::table('products')->insert([
            ['name' => 'De Zaanse Hoeve Yoghurt Griekse stijl','expires-after' => 8],
            ['name' => 'De Zaanse Hoeve Kaas mild 45+','expires-after' => 6],
            ['name' => 'AH Scharreleieren klasse M','expires-after' => 14],
            ['name' => 'AH Aardappelpartjes','expires-after' => 7],
            ['name' => 'Dr. Oetker Ristorante pizza mozzarella','expires-after' => 8],
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
