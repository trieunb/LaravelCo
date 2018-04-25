<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbTestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_test', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('item_int');
            $table->string('item_varchar', 200);
            $table->text('item_text');
            $table->date('item_date');
            $table->string('item_image', 200);
            $table->text('item_gallery');
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
        Schema::dropIfExists('tb_test');
    }
}
