<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('resume_id');
            $table->string('exp_employer', 200);
            $table->string('exp_position', 200);
            $table->date('exp_date_from');
            $table->date('exp_date_to');
            $table->text('exp_description');
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
        Schema::dropIfExists('tb_experiences');
    }
}
