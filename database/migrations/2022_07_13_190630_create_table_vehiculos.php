<?php

use App\Models\Vehiculo;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableVehiculos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('name');
            $table->string('patente');
            $table->string('marca');
            $table->string('img');
            $table->timestamps();
        });

        $v = new Vehiculo();
        $v->user_id = 1;
        $v->name = "Corsa auto nuevo";
        $v->patente = "AAAAXX";
        $v->marca = "Corsa";
        $v->img = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQi2FZqj2QhoYaHIWdhq1PffF0WzOCOQ259O-KnYbFgfQ&s";
        $v->save();

        $v = new Vehiculo();
        $v->user_id = 1;
        $v->name = "Nizzan de la abuelita";
        $v->patente = "BBBAXX";
        $v->marca = "Nisan";
        $v->img = "https://acroadtrip.blob.core.windows.net/catalogo-imagenes/s/RT_V_a6fb99141c3b43e093b4fbc27b42a6ce.jpg";
        $v->save();

        $v = new Vehiculo();
        $v->user_id = 2;
        $v->name = "Camioneta Toyota";
        $v->patente = "ZZZZXX";
        $v->marca = "Toyota";
        $v->img = "https://acroadtrip.blob.core.windows.net/catalogo-imagenes/m/RT_V_9bacc983f9a14051843d2886e34528fc.jpg";
        $v->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
}
