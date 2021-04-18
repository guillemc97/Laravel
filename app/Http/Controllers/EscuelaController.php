<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Escuela;

class EscuelaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $escuelas = Escuela::all();
        return view('escuela.index')->with('escuelas', $escuelas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "test";
        //return view('escuela.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required'
        ]);

        Escuela::create([
            'nombre' => $request->get('nombre')
        ]);

        return back()->with('mensaje', 'ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $escuela = Escuela::find($id);
        return view('escuela.perfil')->with('escuela', $escuela);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $escuela = Escuela::find($id);
        return view('escuela.editar')->with('escuela', $escuela);
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
        //Escuela::where('id', $id)->update(['nombre' => $request->nombre, 'direccion' => $request->direccion, 'correo' => $request->correo, 'telefono' => $request->telefono, 'web' => $request->web]);
        echo "['nombre' => $request->nombre, 'direccion' => $request->direccion, 'correo' => $request->correo, 'telefono' => $request->telefono, 'web' => $request->web]";
        return redirect('escuela');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Escuela::find($id)->delete();
        return redirect('escuela');
    }
}
