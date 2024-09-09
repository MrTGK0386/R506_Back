<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvolutionTrigger extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    public $translatedAttributes = ['name'];

    protected $fillable = ['slug'];

    protected $casts = [
        'slug'=>'string'
    ];

    public function pokemoneEvolutions(){
        return $this->hasMany(PokemonEvolution::class);
    }
}
