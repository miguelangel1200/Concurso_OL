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
        Schema::create('inscripciones', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('modalidad_id')->unique();
            $table->foreign('modalidad_id')
                ->references('id')
                ->on('modalidades')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
            
            $table->string('categoria_ins');
            $table->string('nombres_1');
            $table->string('apellidos_1');
            $table->integer('dni_1');
            $table->string('academia_1');
            $table->integer('cel_1');
            $table->string('nombres_2');
            $table->string('apellidos_2');
            $table->integer('dni_2');
            $table->string('academia_2');
            $table->integer('cel_2');

            $table->string('voucher');

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
        Schema::dropIfExists('inscripciones');
    }
};
