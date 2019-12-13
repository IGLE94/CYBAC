<?php

namespace App\Http\Controllers;

use App\Proyecto;
use App\User;
use Illuminate\Http\Request;

class AsignarProyectosController extends Controller
{
	public function assignedProjects($id)
    {
        $proyecto = Proyecto::findOrFail($id);
        $users = User::pluck('name', 'id');

        return view('proyectos.assignedProjects', compact('proyecto', 'users'));
    }

    public function assignProject(Request $request, $id)
    {
        return $id;
    }
}
