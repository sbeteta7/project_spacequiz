<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('partida_preguntas', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pregunta')->unsigned();
            $table->foreign('id_pregunta')->references('id_pregunta')->on('preguntas')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_partida')->unsigned();
            $table->foreign('id_partida')->references('id_partida')->on('partida')->onUpdate('cascade')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partida_preguntas');
    }
};
