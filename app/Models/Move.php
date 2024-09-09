<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Move extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    public $translatedAttributes = ['name', 'description'];

    protected $fillable = ['accuracy','power','pp','priority'];

    protected $casts = [
        'accuracy' => 'int',
        'power' => 'int',
        'pp' => 'int',
        'priority' => 'int',
    ];

    public function pokemoneLearnMoves(){
        return $this->hasMany(PokemonLearnMove::class);
    }

    public function types(){
        return $this->belongsToMany(Type::class);
    }

    public function moveDamageClass(){
        return $this->belongsTo(MoveDamageClass::class);
    }

    public function pokemonEvolutions(){
        return $this->hasMany(PokemonEvolution::class);
    }

}
