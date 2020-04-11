<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticiasHideTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias_hide', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->timestamps();
            $table->datetime('date');
            $table->char('title', 255);
            $table->char('subtitle', 255)->nullable();
            $table->text('content')->nullable();
            $table->string('modified_by')->nullable();
            $table->char('img_preview', 255);
            $table->char('img_noticia', 255);
            $table->string('slug', 255)->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('noticias_hide');
    }
}
