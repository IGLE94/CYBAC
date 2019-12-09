<?php

namespace App\Http\Controllers;

use App\Actividad;
use App\Diseno;
use Illuminate\Http\Request;

class ActividadesController extends Controller
{
    public function create($id)
    {
    	$diseno = Diseno::findOrFail($id);

    	return view('actividades.create', compact('diseno'));
    }

    public function store(Request $request, $id)
    {
    	 $this->validate($request, [
         'actividad' => 'required']);

    	$actividad = Actividad::create($request->all());
    	$actividad->diseno_id = $id;
    	$actividad->save();

    	return redirect()->route('disenos.index');
    }
}
