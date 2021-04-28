@extends('layouts/app')

@section('content')
        <h1 class="text-center mt-3 ml-3 mb-5">Bienvenido al registro de salida</h1>

        
        <b><h5 class="ml-2">Ingresa la matricula para setear la opción correspondiente para:</h5></b>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">V. Oficial</li>
            <li class="list-group-item">V. Residente</li>
            <li class="list-group-item">V. No residente</li>
          </ul>

        <form action="{{ route('salida.store') }}" method="POST">
            @csrf
                    <div class="col-md-2 mb-3 mt-2">
                            <label for="exampleInputEmail1">Placa/Matricula</label>
                            <input type="text" name="matricula" class="form-control" id="exampleInputEmail1">
                            <small id="emailHelp" class="form-text text-muted">(Ingresa la matricula)</small>
                    </div>
                    <button type="submit" class="btn btn-danger mt-1 ml-3">Registrar salida</button>
            </form>      
@endsection