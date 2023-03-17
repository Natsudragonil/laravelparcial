@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Registro</h1>
@stop

@section('content')
    <form action="/materias/{{$materia->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <lavel for="" class="form-label">Name</lavel>
            <input id="name" name="name" type="text" class="form-control" value="{{$materia->name}}">
        </div>
        <div class="mb-3">
            <lavel for="" class="form-label">Creditos</lavel>
            <input id="creditos" name="creditos" type="number" class="form-control" value="{{$materia->creditos}}">
        </div>
        <div class="mb-3">
            <lavel for="" class="form-label">Estado</lavel>
            <input id="estado" name="estado" type="text" class="form-control" value="{{$materia->estado}}">
        </div>
        <a href="/materias" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop