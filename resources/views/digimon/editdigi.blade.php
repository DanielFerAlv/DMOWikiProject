@extends('plantillas.master')

@section("title")
<title>Editar el registro de un Digimon</title>
@stop

@section('corpse')
<form action="{{ route('digimon.update', $digimon->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @include('digimon._form')
    <input type="reset" class="btn btn-secondary" value="Limpiar campos">
    <input type="submit" class="btn btn-primary" value="Confirmar cambios">
</form>
@stop