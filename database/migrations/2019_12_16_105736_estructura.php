<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Estructura extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("noticias", function (Blueprint $table) {
            $tablwe->increments("id");
            $tablwe->date("date");
            $tablwe->string("title");
            $tablwe->string("subtitle");
            $tablwe->string("content");
            $tablwe->timestamps("created_at");
            $tablwe->timestamps("updated_at");
            $tablwe->string("img_preview", 255);
            $tablwe->string("img_noticia", 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("noticias");
    }
}
