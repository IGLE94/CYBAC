<?php

namespace App\Http\Controllers;

use App\Desarrollo;
use App\Empresa;
use App\Http\Requests\SaveDesarrolloRequest;
use App\User;
use Illuminate\Http\Request;

class DesarrollosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $desarrollos = Desarrollo::all();

        return view('desarrollos.index', compact('desarrollos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresas = Empresa::pluck('nombre', 'id');

        return view('desarrollos.create', compact('empresas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveDesarrolloRequest $request)
    {
        $proyecto = Desarrollo::create($request->all());
        $proyecto->empresa_id = $request->input('empresa');
        $proyecto->save();

        return redirect()->route('desarrollos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $desarrollo = Desarrollo::findOrFail($id);

        return view('desarrollos.show', compact('desarrollo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $desarrollo = Desarrollo::findOrFail($id);
        $empresas = Empresa::pluck('nombre', 'id');

        return view('desarrollos.edit', compact('desarrollo', 'empresas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaveDesarrolloRequest $request, $id)
    {
        $proyecto = Desarrollo::findOrFail($id);
        $proyecto->update($request->all());
        $proyecto->empresa()->associate(request('empresa'));
        $proyecto->save();

        return redirect()->route('desarrollos.index');
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
