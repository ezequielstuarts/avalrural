<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactMailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_emails', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->char('apellido', 255)->nullable();
            $table->char('nombre', 255)->nullable();
            $table->char('empresa', 255)->nullable();
            $table->char('cuit', 40)->nullable();
            $table->char('localidad', 255)->nullable();
            $table->char('telefono', 40)->nullable();
            $table->char('email', 255)->nullable();
            $table->char('consulta', 255)->nullable();
            $table->boolean('enviado')->default(0)->nullable();
            $table->boolean('status')->default(0)->nullable();
            $table->boolean('read')->default(0)->nullable();
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
        Schema::dropIfExists('contact_emails');
    }
}
