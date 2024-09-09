<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameVersion extends Model implements TranslatableContract
{
    use HasFactory, Translatable;

    public $translatedAttributes = ['name'];

    protected $fillable = ['generic_name','generation'];

    protected $casts = [
        'generic_name' => 'string',
        'generation' => 'integer'];

    public function pokemonLearnMoves(){
        return $this->hasMany(PokemonLearnMove::class);
    }
}
