@extends('layouts.app')

@section('content')
<form action="{{ url('escuela') }}" method="post">
        @csrf
        <div class="form-group">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <h1><input type="text" class="form-control" name="nombre"></h1>
                        <img class="img-thumbnail" src=""/>
                    </div>
                    <div class="col-6 mt-5">

                        <div class="form-group row mt-3">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Direccion</label>
                            <input type="text" class="col-sm-10 form-control" name="direccion" >
                        </div>

                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Correo</label>
                            <input type="text" class="col-sm-10 form-control" name="correo" >
                        </div>

                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Telefono</label>
                            <input type="text" class="col-sm-10 form-control" name="telefono" >
                        </div>

                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Web</label>
                            <input type="text" class="col-sm-10 form-control" name="web" >
                        </div>
                        
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
</form>
@endsection