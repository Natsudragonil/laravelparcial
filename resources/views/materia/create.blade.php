@extends('adminlte::page')

@section('title', 'CRUD')

@section('content_header')
    <h1>Crear Registro</h1>
@stop

@section('content')
    <form action="/materias" method="POST">
        @csrf
        <div class="mb-3">
            <lavel for="" class="form-label">Name</lavel>
            <input id="name" name="name" type="text" class="form-control" tabindex="2">
        </div>
        <div class="mb-3">
            <lavel for="" class="form-label">Creditos</lavel>
            <input id="creditos" name="creditos" type="number" class="form-control" tabindex="3">
        </div>
        <div class="mb-3">
            <lavel for="" class="form-label">Estado</lavel>
            <input id="estado" name="estado" type="text" class="form-control" tabindex="3">
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