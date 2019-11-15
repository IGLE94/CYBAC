<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Equipo;
use App\Http\Requests\SaveOrderRequest;
use App\Mail\MessageReceived;
use App\Mail\MessageSent;
use App\Order;
use App\Servicio;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
    public function store(SaveOrderRequest $request)
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

        Mail::to($orden->cliente->email)->queue(new MessageReceived($orden));

        // return 'Mensaje Enviado';
        
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
        $servicios = Servicio::pluck('servicio', 'id');
        $clientes = Cliente::pluck('nombre', 'id');
        $equipos = Equipo::pluck('modelo', 'id');

        return view('orders.edit', compact('order', 'servicios', 'clientes', 'equipos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaveOrderRequest $request, $id)
    {
        //Actualizamos 
        // DB::table('orders')->where('id', $id)->update([
        //     "tipoServicio" => $request->input('tipoServicio'),    
        //     "updated_at" => Carbon::now(),   
        // ]);
        // $orden = Order::findOrFail($id)->servicio()->associate(request('servicio'))->save();
        // $orden = Order::findOrFail($id)->cliente()->associate(request('cliente'))->save();
        // $orden = Order::findOrFail($id)->equipo()->associate(request('equipo'))->save();

        $orden = Order::findOrFail($id);
        $orden->update($request->all());
        $orden->servicio()->associate(request('servicio'));
        $orden->cliente()->associate(request('cliente'));
        $orden->equipo()->associate(request('equipo'));
        $orden->save();

        // $orden = Order::findOrFail($id);
        // $orden->cliente()->dissociate();
        // $orden->save();
        

        // $orden = Order::findOrFail($id)->update([
        //     'servicio_id' => $request->input('servicio'),
        //     'cliente_id' => $request->input('cliente'),
        //     'equipo_id' => $request->input('equipo'),
        // ]);
        
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

    public function status(Request $request, $id)
    {
        $orden = Order::findOrFail($id);
        
        if($orden->status == false)
        {
            $orden->status = true;
            $orden->update(['status' => $orden->status]);

            Mail::to($orden->cliente->email)->queue(new MessageSent($orden));

            return back();
        }
        else
        {
            $orden->status = false;
            $orden->update(['status' => $orden->status]);

            Mail::to($orden->cliente->email)->queue(new MessageSent($orden));

            return back();
        }
    }
}
