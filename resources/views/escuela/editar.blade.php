@extends('layouts.app')

@section('content')
<form action="{{ url('escuela/editar/'.$escuela->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <h1><input type="text" class="form-control" name="nombre" value="{{ $escuela->nombre }}" required></h1>
                        <img id="imagen" class="img-thumbnail" src="{{ $escuela->logotipo }}"/>
                        <input type="file" class="form-control-file mt-2" accept=".jpg,.png" onchange="foto(this)" id="fileName">
                        <input type="hidden" name="logotipo" class="col-sm-10 form-control" id="imgFinal" value="{{ $escuela->logotipo }}">
                    </div>
                    <div class="col-6 mt-5">

                        <div class="form-group row mt-3">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Direccion</label>
                            <input type="text" class="col-sm-10 form-control" name="direccion" value="{{ $escuela->direccion }}" required>
                        </div>

                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Correo</label>
                            <input type="text" class="col-sm-10 form-control" name="correo" value="{{ $escuela->correo }}" required>
                        </div>

                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Telefono</label>
                            <input type="text" class="col-sm-10 form-control" name="telefono" value="{{ $escuela->telefono }}" required>
                        </div>

                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Web</label>
                            <input type="text" class="col-sm-10 form-control" name="web" value="{{ $escuela->web }}" required>
                        </div>
                        
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
</form>
@endsection