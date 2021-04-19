<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;
use App\Models\Escuela;


class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos = Alumno::paginate(3);
        
        foreach ($alumnos as $alumno) {
            $escuela = Escuela::find($alumno->escuela_id);
            $alumno->escuela_id = $escuela->nombre;
        }

        return view('alumno.index')->with('alumnos', $alumnos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $escuelas = Escuela::all();
        return view('alumno.crear')->with('escuelas', $escuelas);
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
            'nombre' => 'required',
            'apellido' => 'required',
            'nacimiento' => 'required',
            'ciudad' => 'required',
            'escuela_id' => 'required'        
        ]);

        Alumno::create([
            'nombre' => $request->get('nombre'),
            'apellido' => $request->get('apellido'),
            'nacimiento' => $request->get('nacimiento'),
            'ciudad' => $request->get('ciudad'),
            'escuela_id' => $request->get('escuela_id')
        ]);

        return redirect('alumno');
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
        $escuelas = Escuela::all();
        
        $alumno = Alumno::find($id);
        return view('alumno.editar')->with(['alumno'=> $alumno, 'escuelas'=> $escuelas]);
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
        Alumno::where('id', $id)->update(['nombre' => $request->nombre, 'apellido' => $request->apellido, 'nacimiento' => $request->nacimiento, 'ciudad' => $request->ciudad, 'escuela_id' => $request->escuela_id]);
        return redirect('alumno');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alumno::find($id)->delete();
        return redirect('alumno');
    }
}
