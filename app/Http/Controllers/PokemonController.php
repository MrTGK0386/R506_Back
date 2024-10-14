<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class PokemonController extends Controller
{
    public function index(){
        return Pokemon::with(['defaultVariety', 'defaultVariety.sprites','defaultVariety.types'])
            ->paginate(20);
    }

    public function show(Pokemon $pokemon){
        return $pokemon->load(['defaultVariety', 'defaultVariety.sprites','defaultVariety.types']);
    }

    public function showVarieties(Pokemon $pokemon)
    {
        return $pokemon->varieties()->with(['sprites', 'types'])->get();
    }


    /*
    public function Varieties($id): JsonResponse
    {
        $pokemon = Pokemon::findOrFail($id);
        $varieties = $pokemon->varieties;

        return response()->json($varieties);
    }
    */
}
