<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ability extends Model
{
    use HasFactory, Translatable;

    public $translatedAttributes = ['name', 'description', 'effect'];

    public function pokemonVarieties()
    {
        return $this->hasMany(PokemonVariety::class);
    }
}
