<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('roles', [ 'roles' => $roles]);

    }

    public function ajouter(Request $request)
    {
       Role::create([
        'name'  => $request->role
       ]);

       return redirect()->route('roles.index')->with('message' , 'Opération effectuée avec succès !');

    }
}
