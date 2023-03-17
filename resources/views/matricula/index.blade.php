@extends('adminlte::page')

@section('title', 'CRUD')

@section('content_header')
    <h1>Listado de Matriculas</h1>
@stop

@section('content')
  <a href="matriculas/create" class="btn btn-primary">Crear</a>

  <table class="table table-dark table-striped mt-4">
    <thead>
      <tr>
        <th scope="col">id_Materia</th>
        <th scope="col">Fecha</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($matriculas as $matricula)
      <tr>
          <td>{{$matricula->id_Matricula}}</td>
          <td>{{$matricula->created_at}}</td>
          <td>
              <form action="{{route('matriculas.destroy',$matricula->id_Matricula)}}" method="POST">
                  <a href="/matriculas/{{$matricula->id_Matricula}}/edit" class="btn btn-info">Editar</a>
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Borrar</button>
              </form>
          </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop