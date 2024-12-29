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
        Schema::create('perfiles_modulos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('perfiles_id');
            $table->foreign('perfiles_id')->references('id')->on('perfiles')->onDelete('cascade');
            $table->unsignedBigInteger('modulos_id');
            $table->foreign('modulos_id')->references('id')->on('modulos')->onDelete('cascade');
            $table->index(['perfiles_id'], 'pm_perfiles_id');
            $table->index(['modulos_id'], 'pm_modulos_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perfiles_modulos');
    }
};
