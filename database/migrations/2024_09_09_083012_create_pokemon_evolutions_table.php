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
        Schema::create('pokemon_evolutions', function (Blueprint $table) {
            $table->id();
            $table->ForeignId('pokemon_variety_id')->nullable()->constrained('pokemon_varieties')->onDelete('cascade');
            $table->ForeignId('evolves_to_id')->nullable()->constrained('pokemon_varieties')->onDelete('cascade');
            $table->boolean('gender')->nullable();
            $table->ForeignId('help_item_id')->nullable()->constrained('items')->onDelete('cascade');
            $table->ForeignId('item_id')->nullable()->constrained('items')->onDelete('cascade');
            $table->ForeignId('known_move_id')->nullable()->constrained('moves')->onDelete('cascade');
            $table->ForeignId( 'known_move_type_id')->nullable()->constrained('types')->onDelete('cascade');
            $table->string('location')->nullable();
            $table->integer('min_affection')->nullable();
            $table->integer('min_happiness')->nullable();
            $table->integer('min_level')->nullable();
            $table->boolean('need_overworld_rain');
            $table->ForeignId('party_species_id')->nullable()->constrained('pokemon')->onDelete('cascade');
            $table->ForeignId('party_type_id')->nullable()->constrained('types')->onDelete('cascade');
            $table->integer('relative_physical_stats')->nullable();
            $table->string('time_of_day')->nullable();
            $table->ForeignId('trade_species_id')->nullable()->constrained('pokemon')->onDelete('cascade');
            $table->boolean('turn_upside_down')->nullable();
            $table->ForeignIdFor(App\Models\EvolutionTrigger::class)->nullable()->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemon_evolutions');
    }
};
