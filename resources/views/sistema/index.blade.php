@extends('layouts/app')

@section('content')

    <div class="container">

        <h1 class="text-center">Bienvenido {{ auth()->user()->name }}</h1>
        
        <h3 class="text-center mt-5">¿Qué opción desea realizar?</h3>

        <div class="list-group">
            <a href="" class="list-group-item list-group-item-action list-group-item-primary mt-3 text-center">Registrar entrada</a>

            <ul class="nav justify-content-center">
                <li class="nav-item">
                  <a class="nav-link active" href="{{ route('oficials.create') }}">Vehiculos oficiales</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('residentes.create') }}">Residentes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('noresidentes.create') }}">No residentes</a>
                </li>
              </ul>
            
            <a href="{{ route('salida.create') }}" class="list-group-item list-group-item-action list-group-item-primary mt-3 text-center">Registrar salida</a>

            <hr>
          
            <a href="{{ route('altaoficial') }}" class="list-group-item list-group-item-action list-group-item-warning mt-3 text-center">Dar de alta un vehículo oficial</a>

            <a href="{{ route('altaresidente') }}" class="list-group-item list-group-item-action list-group-item-warning mt-3 text-center">Dar de alta vehículo un residente</a>

            <hr>

            <form class="form-inline" action="{{ route('comienzames.store') }}" method="POST">
              @csrf

              <button type="submit" class="btn btn-danger btn-lg btn-block mt-2">Comienza mes</button>
            </form>

            {{-- <a href="{{ route('comienzames.store') }}" class="list-group-item list-group-item-action list-group-item-danger mt-3 text-center">Comienza mes</a> --}}
            
            <form class="form-inline" action="{{ route('pagoresidentes.store') }}" method="POST">
              @csrf

              <button type="submit" class="btn btn-danger btn-lg btn-block mt-2">Informe pago de residentes</button>
            </form>
        </div>

    </div>

@endsection