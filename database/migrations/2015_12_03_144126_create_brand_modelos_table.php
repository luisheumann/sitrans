<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandModelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand_modelos', function (Blueprint $table) {
          

            $table->increments('id');
            $table->integer('brand_id');
            $table->integer('modelo_id');
            $table->timestamps();
            $table->index('brand_id');
            $table->index('modelo_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('brand_modelos');
    }
}
