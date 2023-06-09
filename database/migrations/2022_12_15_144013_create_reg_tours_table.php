<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg_tours', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('name');
            $table->string('description',1000);
            $table->string('image');
            $table->string('turismo');
            $table->string('frecuencia');
            $table->string('servicio');

            $table->integer('categorias_idc')->unsigned();
            $table->foreign('categorias_idc')->references('idc')->on('categorias')->onDelete('cascade');
            
            $table->string('day1',1000)->nullable();
            $table->string('day2',1000)->nullable();
            $table->string('day3',1000)->nullable();
            $table->string('day4',1000)->nullable();
            $table->string('day5',1000)->nullable();
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
        Schema::dropIfExists('reg_tours');
    }
}
