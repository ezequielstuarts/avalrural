<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrecalificateTable extends Migration
{

    public function up()
    {
        Schema::create('precalificate', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->char('nombre_y_apellido', 255)->nullable();
            $table->char('email', 255)->nullable();
            $table->char('telefono', 255)->nullable();
            $table->char('celular', 40)->nullable();
            $table->char('empresa', 255)->nullable();
            $table->char('cuit', 40)->nullable();
            $table->char('rubro', 255)->nullable();
            $table->char('codigo_afip', 255)->nullable();
            $table->char('balance', 255)->nullable();
            $table->char('nomina', 255)->nullable();
            $table->char('actividad', 255)->nullable();
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
        Schema::dropIfExists('precalificate');
    }
}
