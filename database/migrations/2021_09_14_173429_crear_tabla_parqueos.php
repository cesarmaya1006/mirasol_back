<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaParqueos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parqueos', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->unsignedBigInteger('casa_id');
            $table->foreign('casa_id', 'fk_casa_parqueo')->references('id')->on('casas')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('parqueadero_id');
            $table->foreign('parqueadero_id', 'fk_parqueadero_parqueo')->references('id')->on('parqueaderos')->onDelete('restrict')->onUpdate('restrict');
            $table->string('conductor', 255);
            $table->string('cedula', 30);
            $table->string('telefono', 30);
            $table->string('placa', 10);
            $table->dateTime('entrada', $precision = 0);
            $table->dateTime('salida', $precision = 0)->nullable();
            $table->bigInteger('horas')->default(0);
            $table->bigInteger('costo')->default(0);
            $table->bigInteger('pago')->default(0);
            $table->bigInteger('saldo')->default(0);
            $table->dateTime('fec_pago', $precision = 0)->nullable();
            $table->boolean('estado', true);
            $table->boolean('ind_anulad', false);
            $table->longText('observaciones')->nullable();
            $table->timestamps();
            $table->charset = 'utf8';
            $table->collation = 'utf8_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parqueos');
    }
}
