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
            $table->ForeignIdFor(App\Models\PokemonVariety::class, 'pokemon_variety_id')->nullable()->constrained()->onDelete('cascade');
            $table->ForeignIdFor(App\Models\PokemonVariety::class, 'evolves_to_id')->nullable()->constrained()->onDelete('cascade');
            $table->boolean('gender')->nullable();
            $table->ForeignIdFor(App\Models\Item::class,'help_item_id')->nullable()->constrained()->onDelete('cascade');
            $table->ForeignIdFor(App\Models\Item::class, 'item_id')->nullable()->constrained()->onDelete('cascade');
            $table->ForeignIdFor(App\Models\Move::class,'known_move_id')->nullable()->constrained()->onDelete('cascade');
            $table->ForeignIdFor(App\Models\Type::class, 'known_move_type_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('location')->nullable();
            $table->integer('min_affection')->nullable();
            $table->integer('min_affection')->nullable();
            $table->integer('min_level')->nullable();
            $table->boolean('need_overworld_rain');
            $table->ForeignIdFor(App\Models\Pokemon::class, 'party_species_id')->nullable()->constrained()->onDelete('cascade');
            $table->ForeignIdFor(App\Models\Type::class, 'party_type_id')->nullable()->constrained()->onDelete('cascade');
            $table->integer('relative_physical_stats')->nullable();
            $table->string('time_of_day')->nullable();
            $table->ForeignIdFor(App\Models\Pokemon::class, 'trade_species_id')->nullable()->constrained()->onDelete('cascade');
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