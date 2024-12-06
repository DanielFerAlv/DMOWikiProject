@extends('plantillas.master')

@section("title")
<title>Editar Tamer</title>
@stop

@section('corpse')
<h2>Editar Tamer</h2>
<form action="{{ route('tamer.update', $tamer->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @include('tamers._form')
    <input type="reset" class="btn btn-secondary" value="Limpiar campos">
    <input type="submit" class="btn btn-primary" value="Confirmar cambios">
</form>
@stop