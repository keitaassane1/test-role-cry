<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index(){

      //$users = User::all() ;
      $users = User::with('role','direction')->get() ;
      return view('users', ['users'=> $users]);
    }

    public function ajouter(Request $request){

        $u = User::create([
            'name'  => $request->name,
            'email'  => $request->email,
            'password' => Hash::make($request->password),
            'role_id'  => $request->role_id,
            'direction_id'  => $request->direction_id,
            'statut'  => $request->statut
           ]);

           $u->assignRole(Role::findById($request->role_id));

           return redirect()->route('users.index')->with('message' , 'Opération effectuée avec succès !');

    }
    //
}
