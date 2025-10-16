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
        Schema::create('fiestas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_fiesta');
            $table->date('fecha');
            $table->string('lugar');
            $table->integer('cupo_maximo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fiestas');
    }
};
