@extends('layouts.app')

@section('content')
<form action="{{ url('alumno/crear') }}" method="post">
        @csrf
        <div class="form-group">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="form-group row mt-3">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Nombre</label>
                            <input type="text" class="col-sm-10 form-control" name="nombre" required>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Apellidos</label>
                            <input type="text" class="col-sm-10 form-control" name="apellido" required>
                        </div>

                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Fecha de nacimiento</label>
                            <input type="date" class="col-sm-10 form-control" name="nacimiento" required>
                        </div>

                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Ciudad</label>
                            <input type="text" class="col-sm-10 form-control" name="ciudad" required>
                        </div>

                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Escuela</label>
                            <!--<input type="text" class="col-sm-10 form-control" name="escuela_id" required>-->
                            <select id="inputState" class="col-sm-10 form-control"  name="escuela_id" required>
                                @foreach($escuelas as $escuela)
                                    <option value="{{ $escuela->id }}">{{ $escuela->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
</form>
@endsection