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
        Schema::create('variables_globales', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('valor');
            $table->index(['nombre'], 'var_glob_nombre');
            $table->index(['valor'], 'var_glob_valor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('variables_globales');
    }
};
