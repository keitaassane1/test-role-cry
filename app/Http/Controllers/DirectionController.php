<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Direction;


class DirectionController extends Controller
{
    public function index()
    {
        $directions = Direction::all();
        return view('directions', [ 'directions' => $directions]);

    }



    public function ajouter(Request $request)
    {
       Direction::create([
        'nom'  => $request->nom,
        'responsable' => $request->responsable
       ]);

       return redirect()->route('directions.index')->with('message' , 'Opération effectuée avec succès !');

    }
}
