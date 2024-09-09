<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PokemonEvolution extends Model
{
    use HasFactory;

    protected $fillable = [
        'gender',
        'location',
        'min_affection',
        'min_happiness',
        'min_level',
        'need_overworld_rain',
        'relative_physical_stats',
        'time_of_day',
        'turn_upside_down'];

    protected $casts = [
      'gender' => 'boolean',
      'location'=>'string',
      'min_affection'=>'integer',
      'min_happiness'=>'integer',
      'min_level'=>'integer',
      'need_overworld_rain'=>'boolean',
      'relative_physical_stats'=>'integer',
      'time_of_day'=>'string',
      'turn_upside_down'=>'boolean',
    ];

    public function pokemonVarieties(){
        return $this->belongsTo(PokemonVariety::class);
    }

    public function items(){
        return $this->belongsTo(Item::class);
    }

    public function types(){
        return $this->belongsTo(Type::class);
    }

    public function moves(){
        return $this->belongsTo(Move::class);
    }

    public function pokemons(){
        return $this->belongsTo(Pokemon::class);
    }

    public function evolutionTriggers(){
        return $this->belongsTo(EvolutionTrigger::class);
    }
}
