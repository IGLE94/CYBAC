<?php

namespace App\Http\Controllers;

use App\Diseno;
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
        return view('disenos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveDisenoRequest $request)
    {
        Diseno::create($request->all());

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

        return view('disenos.edit', compact('diseno'));
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
        Diseno::findOrFail($id)->update($request->all());

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
