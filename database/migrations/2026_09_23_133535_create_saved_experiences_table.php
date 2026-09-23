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
        Schema::create('saved_experiences', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('experience_id')->constrained('experiences');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saved_experiences');
    }
};