<?php

namespace App\Http\Controllers;

use App\Desarrollo;
use App\User;
use Illuminate\Http\Request;

class ProjectsDesController extends Controller
{
    public function assignDesarrollos($id)
    {
        $desarrollo = Desarrollo::findOrFail($id);

        $usuarios = User::pluck('name', 'id');

        return view('desarrollos.assignDesarrollos', compact('desarrollo', 'usuarios'));   
    }

    public function assignUserDesarrollo(Request $request, $id)
    {
        $this->validate($request, [
         'usuarios' => 'required']);
        
        $proyecto =  Desarrollo::findOrFail($id);

        $proyecto->users()->sync($request->usuarios);

        return redirect()->route('desarrollos.index');
    }
}
