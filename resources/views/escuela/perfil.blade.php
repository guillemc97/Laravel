@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">
                <h1>{{ $escuela->nombre }}</h1>
                <img class="img-thumbnail" src="{{ $escuela->logotipo }}"/>
            </div>
            <div class="col-6 mt-5">

                <div class="form-group row mt-3">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Direccion</label>
                    <div class="col-sm-10 form-control">
                            {{ $escuela->direccion }}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Correo</label>
                    <div class="col-sm-10 form-control">
                            {{ $escuela->correo }}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Telefono</label>
                    <div class="col-sm-10 form-control">
                            {{ $escuela->telefono }}
                    </div>
                </div>

                <div class="form-group row">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">Web</label>
                    <div class="col-sm-10 form-control">
                            {{ $escuela->web }}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection