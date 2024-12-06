@extends('plantillas.master')

@section('title')
<title>Editar Registro de un Digimon: Familias, pros y contras.</title>
@stop

@section('corpse')
@if(Session::has('mensaje'))
<div class="alert {{ Session::get('alert-class') }}">
    {{ Session::get('mensaje') }}
</div>
@endif
<form action="{{ route('digimon.update2', $digimon->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @include('digimon._form2')
    <input type="reset" class="btn btn-secondary" value="Limpiar campos">
    <input type="submit" class="btn btn-primary" value="Confirmar cambios">
</form>
@stop