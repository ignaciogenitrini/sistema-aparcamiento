@extends('layouts/app')

@section('content')
        <h1 class="text-left mt-3 ml-3">Registrar una entrada para un Vehiculo Residente</h1>

        <form action="{{ route('residentes.store') }}" method="POST">
        @csrf
                <div class="col-md-2 mb-3 mt-2">
                        <label for="exampleInputEmail1">Placa/Matricula</label>
                        <input type="text" name="placa" class="form-control" id="exampleInputEmail1">
                        <small id="emailHelp" class="form-text text-muted">(Ingresa la matricula)</small>
                </div>
                <button type="submit" class="btn btn-success mt-3 ml-3">Cargar</button>
        </form>

@endsection