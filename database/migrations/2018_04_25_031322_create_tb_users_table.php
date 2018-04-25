<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_name', 50)->unique();
            $table->string('password', 200);
            $table->string('email', 50);
            $table->date('dob');
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->tinyInteger('gender')->default(1)->comment('1:male; 0:female');
            $table->tinyInteger('is_role');
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
        Schema::dropIfExists('tb_users');
    }
}
