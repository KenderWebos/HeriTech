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
            $table->boolean('revisado')->default(0);
            $table->boolean('estado_solicitud')->default(0);
            
            $table->timestamps();

            $table->unsignedBigInteger('id_ubicacion')->nullable();
            $table->unsignedBigInteger('id_generador')->nullable();

            $table->foreign('id_generador')->references('id')->on('users')->onDelete('set null');
            $table->foreign('id_ubicacion')->references('id')->on('ubicaciones')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}

