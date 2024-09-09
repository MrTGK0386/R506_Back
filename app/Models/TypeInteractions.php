<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Interaction;

class TypeInteractions extends Model
{
    use HasFactory;

    public function types(){
        return $this->belongsToMany(Type::class);
    }

    public function typeInteractionsStates(){
        return $this->hasMany(TypeInteractionState::class);
    }
}
