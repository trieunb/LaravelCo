<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_products', function (Blueprint $table) {
            $table->bigIncrements('ID');
            $table->bigInteger('user_id');
            $table->bigInteger('category_id');
            $table->bigInteger('comment_id')->nullable(true);
            $table->string('prod_name', 200);
            $table->string('prod_image', 200);
            $table->text('prod_description');
            $table->integer('prod_qty');
            $table->integer('prod_price');
            $table->integer('prod_price_sale');
            $table->string('prod_price_unit');
            $table->string('prod_size');
            $table->string('prod_color');
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
        Schema::dropIfExists('tb_products');
    }
}
