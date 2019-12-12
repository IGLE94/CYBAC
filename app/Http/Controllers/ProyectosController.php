<?php

namespace App\Http\Controllers;

use App\Tipo;
use App\Empresa;
use App\Proyecto;
use Illuminate\Http\Request;

class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyecto::all();

        return view('proyectos.index', compact('proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos = Tipo::pluck('tipo', 'id');
        $empresas = Empresa::pluck('nombre', 'id');

        return view('proyectos.create', compact('tipos', 'empresas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proyecto = Proyecto::create($request->all());
        $proyecto->tipo_id = $request->input('tipo');
        $proyecto->empresa_id = $request->input('empresa');
        $proyecto->save();

        return redirect()->route('proyectos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyecto = Proyecto::findOrFail($id);
        $tipos = Tipo::pluck('tipo', 'id');
        $empresas = Empresa::pluck('nombre', 'id');

        return view('proyectos.edit', compact('proyecto', 'tipos', 'empresas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $proyecto = Proyecto::findOrFail($id);
        $proyecto->update($request->all());
        $proyecto->tipo()->associate(request('tipo'));
        $proyecto->empresa()->associate(request('empresa'));
        $proyecto->save();

        return redirect()->route('proyectos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
