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
        Schema::connection('empresas_mysql')->create('empresa', function (Blueprint $table) {
            $table->increments('id');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('codigopostal');
            $table->string('ciudad');
            $table->string('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresa');
    }
};
