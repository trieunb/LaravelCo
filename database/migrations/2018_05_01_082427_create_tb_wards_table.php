<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbWardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_wards', function (Blueprint $table) {
            $table->string('ID', 5);
            $table->string('district_id');
            $table->string('name', 200);
            $table->string('type', 200);
            $table->string('location', 200);
            $table->primary('ID');
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
        Schema::dropIfExists('tb_wards');
    }
}
