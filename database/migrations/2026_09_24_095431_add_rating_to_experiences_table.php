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
        Schema::table('experiences', function (Blueprint $table) {

            // Note donnée à l'expérience : de 1 à 5
            // nullable permet de conserver les anciens commentaires sans note
            $table->unsignedTinyInteger('rating')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('experiences', function (Blueprint $table) {

            // Supprime la colonne rating si on annule la migration
            $table->dropColumn('rating');

        });
    }
};