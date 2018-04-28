<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('category_id');
            $table->integer('city_id');
            /* job infomation */
            $table->string('job_logo', 200)->nullable(true);
            $table->string('job_title', 200);
            $table->string('job_email', 20);
            $table->tinyInteger('job_type');
            $table->string('job_address', 100);
            $table->string('job_location_lat', 100);
            $table->string('job_location_long', 100);
            $table->string('job_position', 100)->comment('chức vụ');
            $table->tinyInteger('job_experience')->nullable(true);
            $table->string('job_vacancy', 100)->nullable(true)->comment('vị trí tuyển dụng');
            $table->tinyInteger('job_package')->nullable(true);
            $table->integer('job_salary_from')->nullable(true);
            $table->integer('job_salary_to')->nullable(true);
            $table->tinyInteger('job_negotiable')->nullable(true);
            $table->integer('job_viewer')->nullable(true);
            $table->integer('job_applied')->nullable(true);
            $table->integer('job_shared')->nullable(true);
            /* job Company */
            $table->string('job_comp_email', 200)->nullable(true);
            $table->string('job_comp_phone', 200)->nullable(true);
            $table->string('job_comp_landline', 200)->nullable(true);
            $table->string('job_comp_website', 200)->nullable(true);
            $table->string('job_comp_address', 200)->nullable(true);
            $table->string('job_comp_city', 200)->nullable(true);
            $table->string('job_comp_logo', 200)->nullable(true);
            $table->text('job_comp_description')->nullable(true);
            /* job Social */
            $table->string('job_facebook', 200)->nullable(true);
            $table->string('job_google', 200)->nullable(true);
            $table->string('job_twitter', 200)->nullable(true);
            $table->string('job_linkedIn', 200)->nullable(true);
            $table->string('job_pinterest', 200)->nullable(true);
            $table->string('job_instagram', 200)->nullable(true);
            /* job description */
            $table->text('job_benefit');
            $table->text('job_about');
            $table->text('job_requirement');
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
        Schema::dropIfExists('tb_jobs');
    }
}
