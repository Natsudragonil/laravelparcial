@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Registro</h1>
@stop

@section('content')
    <form action="/matriculas/{{$matricula->id_Matricula}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <lavel for="" class="form-label">Id</lavel>
            <input id="id_Matricula" name="id_Matricula" type="number" class="form-control" value="{{$matricula->id_Matricula}}">
        </div>
        <a href="/matriculas" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop