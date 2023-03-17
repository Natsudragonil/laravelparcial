@extends('adminlte::page')

@section('title', 'CRUD')

@section('content_header')
    <h1>Crear Registro</h1>
@stop

@section('content')
    <form action="/matriculas" method="POST">
        @csrf
        <div class="mb-3">
            <lavel for="" class="form-label">Id_Matricula</lavel>
            <input id="id_Matricula" name="id_Matricula" type="number" class="form-control" tabindex="2">
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