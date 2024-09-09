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
        Schema::create('ability_pokemon_variety', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('ability_id');
            $table->unsignedBigInteger('pokemon_variety_id');
            $table->boolean('is_hidden')->default(false);
            $table->integer('slot');

            // Clés étrangères
            $table->foreign('ability_id')->references('id')->on('abilities')->onDelete('cascade');
            $table->foreign('pokemon_variety_id')->references('id')->on('pokemon_varieties')->onDelete('cascade');

            // Index unique sur la combinaison de ability_id et pokemon_variety_id
            $table->unique(['ability_id', 'pokemon_variety_id']);

            // Horodatage des colonnes created_at et updated_at
            $table->timestamps();
        });
    }

    /**
     * Revenir en arrière la migration.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ability_pokemon_variety');
    }
};
