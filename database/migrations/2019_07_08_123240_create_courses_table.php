<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('section')->default('cursos');
            $table->bigInteger('dia')->nullable();
            $table->bigInteger('mes')->nullable();
            $table->text('titulo')->nullable();
            $table->text('descripcion')->nullable();
            $table->text('descripcion2')->nullable();
            $table->text('ruta')->nullable();
            $table->text('destinatarios')->nullable();
            $table->text('contenido')->nullable();
            $table->text('inversion')->nullable();
            $table->text('duracion')->nullable();
            $table->text('cronograma')->nullable();
            $table->text('lugar')->nullable();
            $table->text('capacitador')->nullable();
            $table->boolean('habilitado')->nullable();
            $table->text('orden')->nullable();
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
        Schema::dropIfExists('courses');
    }
}
