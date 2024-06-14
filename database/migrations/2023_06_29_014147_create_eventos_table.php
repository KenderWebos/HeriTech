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
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}

