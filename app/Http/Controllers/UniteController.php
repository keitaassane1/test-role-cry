<?php

namespace App\Http\Controllers;

use App\Models\Unite;
use Illuminate\Http\Request;

class UniteController extends Controller
{
    public function index()
    {
        $unites = Unite::all();
        return view('unites', [ 'unites' => $unites]);

    }

    //

    public function store(Request $request)
    {
       //return $request->all();

       Unite::create([
        'nom'  => $request->nom,
        'direction_id' => $request->direction_id
       ]);

       return redirect()->route('unites.index')->with('message' , 'Opération effectuée avec succès !');

    }
}
