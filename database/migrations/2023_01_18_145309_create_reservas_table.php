<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->string('correo',50);
            $table->string('cantidad',6);
            $table->date('fecha')->format('d/m/Y');
            $table->string('nacionalidad',50);
            $table->string('codigo',6);
            $table->string('whatsapp',50);
            $table->string('destino',50)->nullable();;
            $table->string('instagram',50)->nullable();
            $table->string('mensaje',1000)->nullable();
            $table->string('status',5);
            $table->rememberToken();
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
        Schema::dropIfExists('reservas');
    }
}
