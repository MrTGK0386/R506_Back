<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    public $translatedAttributes = ['name', 'description'];

    protected $fillable = ['sprite_url'];

    protected $casts = [
        'sprite_url' => 'string',
    ];

    public function pokemonEvolutions(){
        return $this->hasMany(PokemonEvolution::class);
    }
}
