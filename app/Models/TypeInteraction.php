<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeInteraction extends Model
{
    use HasFactory;

    public $fillable = ['from_type_id', 'to_type_id', 'type_interaction_state_id'];

    public function toType(){
        return $this->hasOne(Type::class, 'to_type_id');
    }

    public function fromType(){
        return $this->hasOne(Type::class, 'from_type_id');
    }
    public function typeInteractionState(){
        return $this->hasOne(TypeInteractionState::class, 'type_interaction_state_id');
    }
}
