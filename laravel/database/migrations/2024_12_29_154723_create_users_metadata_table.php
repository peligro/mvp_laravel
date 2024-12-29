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
        Schema::create('users_metadata', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade'); 
            $table->unsignedBigInteger('perfiles_id');
            $table->foreign('perfiles_id')->references('id')->on('perfiles')->onDelete('cascade');
            $table->unsignedBigInteger('estados_id');
            $table->foreign('estados_id')->references('id')->on('estados')->onDelete('cascade');
            $table->index(['users_id'], 'umd_users_id');
            $table->index(['perfiles_id'], 'umd_perfiles_id');
            $table->index(['estados_id'], 'umd_estados_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_metadata');
    }
};
