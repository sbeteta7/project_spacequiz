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
        Schema::create('estadistica', function (Blueprint $table) {
            $table->unsignedBigInteger('id_partida')->unsigned();
            $table->foreign('id_partida')->references('id_partida')->on('partida')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id_usuario')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('puntajes')->nullable();
            $table->boolean('estado')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estadistica');
    }
};
