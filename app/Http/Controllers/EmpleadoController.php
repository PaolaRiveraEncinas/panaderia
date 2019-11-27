<?php

namespace App\Http\Controllers;

use App\empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=empleado::all();
        return view('empleado.index',compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = new Empleado();
        $datos->nombre = $request->name;
        $datos->direccion = $request->address; 
        $datos->ci = $request->cia;
        $datos->numero = $request->number;
        $datos->save();
        $datos=Empleado::all();
        return view('empleado.index',compact('datos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(empleado $empleado)
    {
        return view('empleado.show',compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(empleado $empleado)
    {
        return view('empleado.edit',compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, empleado $empleado)
    {
        $empleado->nombre = $request->name;
        $empleado->direccion = $request->address;
        $empleado->ci = $request->cia;
        $empleado->numero = $request->number;
        $empleado->save();
        $datos=Empleado::all();
        return view('empleado.index',compact('datos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(empleado $empleado)
    {
        $empleado->delete();
        $datos=Empleado::all();
        return view('empleado.index',compact('datos'));
    }
}
