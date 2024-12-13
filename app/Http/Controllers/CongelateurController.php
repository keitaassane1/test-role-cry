<?php

namespace App\Http\Controllers;

use App\Models\Congelateur;
use Illuminate\Http\Request;

class CongelateurController extends Controller
{
    public function index()
    {
        $congelateurs = Congelateur::all();
        return view('congelateur', [ 'congelateurs' => $congelateurs]);

    }

    public function store(Request $request)
    {
        Congelateur::create([
            'code'  => $request->code,
            'capacite' => $request->capacite,
            'tempmax' => $request->tempmax,
       ]);

       return redirect()->route('congelateurs.index')->with('message' , 'Opération effectuée avec succès !');

    }
}
