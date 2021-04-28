@extends('layouts/app')

@section('content')
  @if($noresidente)
  <h1 class="text-center mt-3 ml-3 mb-5">Información sobre su importe.</h1>

  <table class="table">
      <thead>
        <tr>
          <th scope="col">Placa</th>
          <th scope="col">Total</th>
          <th scope="col">Tiempo estacionado</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{ $noresidente }}</td>
        </tr>
      </tbody>
    </table>
  @else 
          <h1>No hay iformación para mostrar</h1>
  @endif
@endsection