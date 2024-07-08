<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('titulo');
            $table->string('descripcion');

            $table->string('duracion')->nullable();
            $table->string('ubicacion')->nullable();
            $table->string('latitud')->nullable();
            $table->string('longitud')->nullable();
            $table->boolean('revisado')->default(0);
            $table->boolean('estado_solicitud')->default(0);
            $table->unsignedBigInteger('id_generador')->nullable();
            $table->timestamps();


            $table->foreign('id_generador')->references('id')->on('users')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}

