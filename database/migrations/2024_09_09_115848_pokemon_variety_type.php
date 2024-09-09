<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Exécuter la migration.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemon_variety_type', function (Blueprint $table) {
            $table->id();
            $table->integer('slot');
            $table->foreignId('pokemon_variety_id')->constrained('pokemon_varieties')->onDelete('cascade');
            $table->foreignId('type_id')->constrained('types')->onDelete('cascade');
            $table->timestamps();

            $table->unique(['pokemon_variety_id', 'type_id']);
        });
    }

    /**
     * Revenir en arrière sur la migration.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pokemon_variety_type');
    }
};
