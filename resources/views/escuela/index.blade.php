@extends('layouts.app')

@section('content')
<div class="container">
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Escuela</th>
                <th scope="col">Direccion</th>
                <th scope="col">Correo</th>
                <th scope="col">Telefono</th>
                <th scope="col">Web</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($escuelas as $escuela)
            <tr>
                <td>{{ $escuela->nombre }}</td>
                <td>{{ $escuela->direccion }}</td>
                <td>{{ $escuela->correo }}</td>
                <td>{{ $escuela->telefono }}</td>
                <td>{{ $escuela->web }}</td>
                <td>
                    <a href="{{ url('escuela/'.$escuela->id) }}"><button type="button" class="btn btn-primary" >Ver</button></a>
                <td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
@endsection
