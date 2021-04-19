@extends('layouts.app')

@section('content')
<div class="container">
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Fecha de nacimiento</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Escuela</th>
                <th scope="col">
                    <!-- Authentication Links -->
                    @guest
                        @else
                        <a href="{{ url('alumno/crear') }}"><button type="button" class="btn btn-success">Crear</button></a>
                    @endguest
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($alumnos as $alumno)
            <tr>
                <td>{{ $alumno->nombre }}</td>
                <td>{{ $alumno->apellido }}</td>
                <td>{{ $alumno->nacimiento }}</td>
                <td>{{ $alumno->ciudad }}</td>
                <td>{{ $alumno->escuela_id }}</td>
                <td>
                    <!-- Authentication Links -->
                    @guest
                        @else
                        <a href="{{ url('alumno/editar/'.$alumno->id) }}"><button type="button" class="btn btn-warning">Editar</button></a>
                        <a href="{{ url('alumno/delete/'.$alumno->id) }}"><button type="button" class="btn btn-danger">Eliminar</button></a>
                    @endguest
                <td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $alumnos->links() }}
</div>
@endsection
