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
        Schema::create('carros', function (Blueprint $table) {
            $table->id();
            $table->string('modelo');
            $table->integer('ano');
            $table->integer('pessoa_id')->unsigned()->nullable(); //Utilizado para criar uma chave estrangeira para realizar as denifições entre entidades
            $table->foreign('pessoa_id')->references('id')->on('pessoas')->onDelete('cascade'); //Utilizado para definir a referencia da "chave estrangeira"
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carros');
    }
};
