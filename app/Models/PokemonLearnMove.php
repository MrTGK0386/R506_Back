<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PokemonLearnMove extends Model
{
    use HasFactory;

    protected $fillable = ['level'];

    protected $casts = [
        'level' => 'integer'
    ];

    public function pokemonVarieties(){
        return $this->belongsTo(PokemonVariety::class);
    }

    public function Moves(){
        return $this->belongsTo(Move::class);
    }

    public function moveLearnMethods(){
        return $this->belongsTo(MoveLearnMethod::class);
    }

    public function gameVersions(){
        return $this->belongsTo(GameVersion::class);
    }
}
