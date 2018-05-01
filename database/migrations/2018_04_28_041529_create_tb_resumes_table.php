<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_resumes', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->integer('user_id');
            $table->integer('category_id');
            $table->integer('education_id')->nullable(true);
            $table->integer('experience_id')->nullable(true);
            $table->integer('skill_id')->nullable(true);
            $table->integer('city_id')->nullable(true);
            /* resume infomation */
            $table->string('resume_logo', 200)->nullable(true);
            $table->string('resume_name', 100);
            $table->string('resume_email', 50);
            $table->string('resume_phone', 20)->nullable(true);
            $table->string('resume_website', 100)->nullable(true);
            $table->string('resume_address', 100)->nullable(true);
            $table->date('resume_dob')->nullable(true)->comment('birthday');
            $table->string('resume_professional_title', 200)->nullable(true);
            $table->text('resume_description')->nullable(true);
            $table->text('resume_about')->nullable(true);
            $table->integer('resume_salary')->nullable(true)->comment('Lương mong muốn');
            $table->integer('resume_salary_unit')->nullable(true)->comment('Đơn vị theo giờ/ngày/tháng');
            $table->integer('resume_salary_currency')->nullable(true)->comment('Đơn vị tiền tệ');

            $table->integer('resume_viewer')->nullable(true);
            $table->integer('resume_applied')->nullable(true);
            $table->integer('resume_shared')->nullable(true);
            /* job Social */
            $table->string('resume_facebook', 200)->nullable(true);
            $table->string('resume_google', 200)->nullable(true);
            $table->string('resume_twitter', 200)->nullable(true);
            $table->string('resume_linkedIn', 200)->nullable(true);
            $table->string('resume_pinterest', 200)->nullable(true);
            $table->string('resume_instagram', 200)->nullable(true);
            $table->string('resume_github', 200)->nullable(true);
            $table->string('resume_bitbucket', 200)->nullable(true);

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
        Schema::dropIfExists('tb_resumes');
    }
}
