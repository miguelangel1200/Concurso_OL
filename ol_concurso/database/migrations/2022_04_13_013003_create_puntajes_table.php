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
        Schema::create('puntajes', function (Blueprint $table) {
            $table->id();


            $table->unsignedBigInteger('fases_id')->unique();
            $table->foreign('fases_id')
                ->references('id')
                ->on('fases')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->unsignedBigInteger('inscripciones_id');
            $table->foreign('inscripciones_id')
                ->references('id')
                ->on('inscripciones')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->string('ju_1');
            $table->string('ju_2');
            $table->string('ju_3');
            $table->string('ju_4');
            $table->string('ju_5')->nullable();
            $table->string('ju_6')->nullable();
            $table->string('ju_7')->nullable();

            $table->integer('punt_1');
            $table->integer('punt_3');
            $table->integer('punt_4');
            $table->integer('punt_5')->nullable();
            $table->integer('punt_6')->nullable();
            $table->integer('punt_7')->nullable();

            


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
        Schema::dropIfExists('puntajes');
    }
};
