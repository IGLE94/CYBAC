<?php

namespace App\Http\Controllers;

use App\Diseno;
use App\User;
use Illuminate\Http\Request;

class ProjectsDisController extends Controller
{
    public function assignDisenos($id)
    {
        $diseno = Diseno::findOrFail($id);

        $usuarios = User::pluck('name', 'id');

        return view('disenos.assignDisenos', compact('diseno', 'usuarios'));
    }

    public function assignUser(Request $request, $id)
    {
        $this->validate($request, [
            'usuarios' => 'required']);
        
        $proyecto = Diseno::findOrFail($id);

        $proyecto->users()->sync($request->usuarios);

        return redirect()->route('disenos.index');
    }

    public function assignProjectDis($id)
    {
        $usuario = User::findOrFail($id);

        return view('disenos.assignProjectDis', compact('usuario'));
    }
}
