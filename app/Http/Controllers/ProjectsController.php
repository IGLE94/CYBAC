<?php

namespace App\Http\Controllers;

use App\Proyecto;
use App\User;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function projectIndex($id)
    {
        $user = User::findOrFail($id);

        return view('proyectos.projectIndex', compact('user'));
    }

    public function assignProjects($id)
    {
    	$proyecto = Proyecto::findOrFail($id);
    	$usuarios = User::pluck('name', 'id');

    	return view('proyectos.assignProjects', compact('proyecto', 'usuarios'));
    }

    public function assignUser(Request $request, $id)
    {
		$this->validate($request, [
			'usuarios' => 'required']);

		$proyecto = Proyecto::findOrFail($id);

		$proyecto->users()->sync($request->usuarios);

		return redirect()->route('proyectos.index');
    }
}
