<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbDistrictsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_districts', function (Blueprint $table) {
            $table->string('ID', 5);
            $table->string('province_id');
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
        Schema::dropIfExists('tb_districts');
    }
}
