<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeInteraction extends Model
{
    use HasFactory;

    public function types(){
        return $this->belongsToMany(Type::class);
    }

    public function typeInteractionState(){
        return $this->hasMany(TypeInteractionState::class);
    }
}
