<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Equipo;
use App\Http\Requests\CreateOrderRequest;
use App\Order;
use App\Servicio;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;

class OrdenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $ordenes = DB::table('orders')->get();
        $ordenes = Order::all();

        return view('orders.index', compact('ordenes'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servicios = Servicio::pluck('servicio', 'id');
        $clientes = Cliente::pluck('nombre', 'id');
        $equipos = Equipo::pluck('modelo', 'id');

        return view('orders.create', compact('servicios', 'clientes', 'equipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateOrderRequest $request)
    {
        // Guardar la  Orden 
        // DB::table('orders')->insert([
        //     "tipoServicio" => $request->input('tipoServicio'),
        //     "created_at" => Carbon::now(),
        //     "updated_at" => Carbon::now(),
        // ]);
        
        $orden = Order::create($request->all());
        $orden->servicio_id = $request->input('servicio');
        $orden->cliente_id = $request->input('cliente');
        $orden->equipo_id = $request->input('equipo');
        $orden->save();

        // Redireccionar la Orden
        return redirect()->route('ordenes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $order = DB::table('orders')->where('id', $id)->first();
        $order = Order::findOrFail($id);

        return view('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $order = DB::table('orders')->where('id', $id)->first();
        $order = Order::findOrFail($id);

        return view('orders.edit', compact('order'));
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
        //Actualizamos 
        // DB::table('orders')->where('id', $id)->update([
        //     "tipoServicio" => $request->input('tipoServicio'),    
        //     "updated_at" => Carbon::now(),   
        // ]);
        Order::findOrFail($id)->update($request->all());

        // Redireccionamos
        return redirect()->route('ordenes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Eliminar Mensaje
        // DB::table('orders')->where('id', $id)->delete();
        Order::findOrFail($id)->delete();

        // Redireccionar
        return redirect()->route('ordenes.index');
    }
}
