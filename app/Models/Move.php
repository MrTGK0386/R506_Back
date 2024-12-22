<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

use function PHPSTORM_META\type;

class Move extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    public $translatedAttributes = ['name','description'];

    protected $fillable=[
        'accuracy',
        'power',
        'pp',
        'priority',
        'move_damage_class_id',
        'type_id'
    ];

    protected $casts = [
        'accuracy' => 'int',
        'power' => 'int',
        'pp' => 'int',
        'priority' => 'int',
    ];

    public function pokemonEvolution(){
        return $this->hasMany(PokemonEvolution::class);
    }

    public function pokemonLearnMove(){
        return $this->hasMany(PokemonLearnMove::class);
    }

    public function damageClass(){
        return $this->belongsTo(MoveDamageClass::class);
    }

    public function types(){
        return $this->belongsToMany(Type::class);
    }
}
