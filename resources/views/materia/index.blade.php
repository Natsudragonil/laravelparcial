@extends('adminlte::page')

@section('title', 'CRUD')

@section('content_header')
    <h1>Listado de Materias</h1>
@stop

@section('content')
  <a href="materias/create" class="btn btn-primary">Crear</a>

  <table class="table table-dark table-striped mt-4">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Nombre</th>
        <th scope="col">Creditos</th>
        <th scope="col">Estado</th>
        <th scope="col">date_at</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($materias as $materia)
      <tr>
          <td>{{$materia->id}}</td>
          <td>{{$materia->name}}</td>
          <td>{{$materia->creditos}}</td>
          <td>{{$materia->estado}}</td>
          <td>{{$materia->created_at}}</td>
          <td>
              <form action="{{route('materias.destroy',$materia->id)}}" method="POST">
                  <a href="/materias/{{$materia->id}}/edit" class="btn btn-info">Editar</a>
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