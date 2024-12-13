<?php

namespace App\Http\Controllers;

use App\Http\Requests\AgentRequest;
use App\Models\Agent;

class AgentController extends Controller
{

    public function index(){

        $agents = Agent::with('direction','unite')->get();
        return view('agents', ['agents'=> $agents]);
      }

      public function store(AgentRequest $request){

          Agent::create([
              'nom'  => $request->name,
              'postnom'  => $request->postnom,
              'prenom'  => $request->prenom,
              'fonction'  => $request->fonction,
              'institution'  => $request->institution,
              'direction_id'  => $request->direction_id,
              'unite_id'  => $request->unite_id,
              'telephone'  => $request->telephone,
              'email'  => $request->email,

             ]);

             return redirect()->route('agent.index')->with('message' , 'Opération effectuée avec succès !');

      }
      //
}
