<?php

namespace App\Http\Controllers;

use App\pedido;
use App\cliente;
use App\producto;
use App\empleado;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos = pedido::all();
        return view('pedido.index',compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes=cliente::all(); 
        $productos=producto::all(); 
        $empleados=empleado::all();         
        return view('pedido.create', compact('clientes','productos','empleados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $reques
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $datos = new Pedido();
        $datos->fecha = $request->fecha;
        $datos->id_cliente = $request->cliente;
        $datos->id_producto = $request->producto;
        $datos->id_empleado = $request->empleado;
        $datos->save();        
        return redirect('/pedido');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(pedido $pedido)
    {
        return view('pedido.show',compact('pedido'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(pedido $pedido)
    {
        return view('pedido.edit',compact('pedido'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pedido $pedido)
    {
       /* $producto->tipo = $request->product;
        $producto->precio = $request->one;
        $producto->save();
        $datos=Producto::all();
        return view('producto.index',compact('datos'));*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(pedido $pedido)
    {
        $pedido->delete();
        $datos=Pedido::all();
        return view('pedido.index',compact('datos'));
    }
}
