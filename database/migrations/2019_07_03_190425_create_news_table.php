<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo')->nullable();
            $table->longText('descripcion')->nullable();
            $table->longText('breve')->nullable();
            $table->string('ruta')->nullable();
            $table->boolean('habilitado')->nullable()->default(1);
            $table->boolean('portada')->nullable()->default(0);
            $table->string('orden')->nullable();
            $table->string('pdf')->nullable();
            $table->json('image')->nullable();
            $table->json('otros')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
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
        Schema::dropIfExists('news');
    }
}
