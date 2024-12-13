<?php

namespace App\Http\Controllers;

use App\Models\Etude;
use Illuminate\Http\Request;

class EtudeController extends Controller
{
    public function index()
    {
        $etudes = Etude::all();
        return view('etudes', ['etudes' => $etudes]);
    }

    //

    public function ajouter(Request $request)
    {
        Etude::create([
            'nom'  => $request->nom,
            'responsable' => $request->responsable
        ]);

        return redirect()->route('etudes.index')->with('message', 'Opération effectuée avec succès !');
    }
}
