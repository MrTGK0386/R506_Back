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
        Schema::table('types', function (Blueprint $table) {
            $table->string('color')->nullable();    // nullable() permet d'ajouter la colonne même avec des données existantes
            $table->string('icon')->nullable();
            $table->string('background')->nullable();

            // Suppression de l'ancienne colonne
            $table->dropColumn('sprite_url');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('types', function (Blueprint $table) {
            $table->string('sprite_url')->nullable();

            // Suppression des nouvelles colonnes
            $table->dropColumn(['color', 'icon', 'background']);
        });
    }
};
