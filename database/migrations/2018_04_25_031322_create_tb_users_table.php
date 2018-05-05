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
            $table->bigIncrements('ID');
            $table->string('user_name', 50);
            $table->string('password', 200)->nullable();
            $table->string('email', 50);
            $table->date('dob')->nullable();
            $table->string('first_name', 50)->nullable();
            $table->string('last_name', 50)->nullable();
            $table->tinyInteger('gender')->default(1)->comment('1:male; 0:female')->nullable();
            $table->tinyInteger('is_role')->nullable();
            $table->string('provider', 20)->nullable();
            $table->string('provider_id', 200)->nullable();
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
