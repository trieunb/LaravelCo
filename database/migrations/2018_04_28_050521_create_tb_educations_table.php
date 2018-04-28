<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbEducationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_educations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('resume_id');
            $table->string('edu_school_name', 200);
            $table->string('edu_qualification', 200);
            $table->date('edu_date_from');
            $table->date('edu_date_to');
            $table->text('edu_description');
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
        Schema::dropIfExists('tb_educations');
    }
}
