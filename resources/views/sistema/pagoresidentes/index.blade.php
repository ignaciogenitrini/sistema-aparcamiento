@extends('layouts/app')

@section('content')

    @if($residentes)
        <h1 class="text-center mt-3 ml-3 mb-5">Informe sobre pagos de residentes</h1>
        <h6 class="text-center">(Recuerde registrar la salida para obtener el total).</h6>    

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Num. placa</th>
                <th scope="col">Tiempo estacionado</th>
                <th scope="col">Total a pagar</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($residentes as $item => $atributo)
            <tr>
                <td>{{ $atributo->id }}</td>
                <td>{{ $atributo->placa }}</td>
                <td>{{ $atributo->tiempoestacionado }} min.</td>
                <td>${{ $atributo->total }}</td>
              </tr>
            @endforeach
            </tbody>
          </table>
    @else
        <h1 class="text-center mt-3 ml-3 mb-5">No existen registros.</h1>
    @endif
@endsection