@extends('plantillas.master')

@section("title")
<title>Registrar Digimon</title>
@stop

@section('corpse')
<h2>Registrar Digimon</h2>
<form action="{{ route('digimon.store') }}" method="POST" enctype="multipart/form-data">
    @include('digimon._form')
    <input type="reset" class="btn btn-secondary" value="Limpiar campos">
    <input type="submit" class="btn btn-primary" value="Registrar">
</form>
@stop