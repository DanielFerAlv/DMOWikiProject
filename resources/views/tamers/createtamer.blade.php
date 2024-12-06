@extends('plantillas.master')

@section("title")
<title>Registrar Tamer</title>
@stop

@section('corpse')
<h2>Registrar Tamer</h2>
<form action="{{ route('tamer.store') }}" method="POST" enctype="multipart/form-data">
    @include('tamers._form')
    <input type="reset" class="btn btn-secondary" value="Limpiar campos">
    <input type="submit" class="btn btn-primary" value="Registrar">
</form>
@stop