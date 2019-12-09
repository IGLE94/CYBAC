<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Diseno;
use App\Empresa;
use App\Http\Requests\SaveDisenoRequest;
use Illuminate\Http\Request;

class DisenosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disenos =  Diseno::all();

        return view('disenos.index', compact('disenos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresas = Empresa::pluck('nombre', 'id');
        $categorias = Categoria::pluck('categoria', 'id');

        return view('disenos.create', compact('empresas', 'categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveDisenoRequest $request)
    {
        $proyecto = Diseno::create($request->all());
        $proyecto->empresa_id = $request->input('empresa');
        $proyecto->categoria_id = $request->input('categoria');
        $proyecto->save();

        return redirect()->route('disenos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diseno = Diseno::findOrFail($id);

        return view('disenos.show', compact('diseno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $diseno = Diseno::findOrFail($id);
        $empresas = Empresa::pluck('nombre', 'id');
        $categorias = Categoria::pluck('categoria', 'id');

        return view('disenos.edit', compact('diseno', 'empresas', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaveDisenoRequest $request, $id)
    {
        $proyecto = Diseno::findOrFail($id);

        $proyecto->update($request->all());
        $proyecto->empresa()->associate(request('empresa'));
        $proyecto->save();

        return redirect()->route('disenos.index');
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
