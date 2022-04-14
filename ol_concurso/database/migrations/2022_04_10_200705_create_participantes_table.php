<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participantes', function (Blueprint $table) {
            $table->id();

            $table->string('nombres_par');
            $table->string('apellidos_par');
            $table->integer('dni_par');
            $table->date('fecha_nac_par');
            $table->string('categoria_par');
            $table->string('foto_dni');
            $table->integer('edad_par');
            $table->integer('num_celular');
            $table->string('academia')->default('libre');
            $table->string('correo_par')->nullable();
            $table->string('sexo_par');
            $table->string('nombre_apoderado')->nullable();
            $table->string('apellido_apoderado')->nullable();
            $table->integer('dni_apoderado')->nullable();
            $table->string('estado')->default('pendiente');

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
        Schema::dropIfExists('participantes');
    }
};
