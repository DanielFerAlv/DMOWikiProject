@extends('plantillas.master')

@section("title")
<title>Registrar Digimon</title>
@stop

@section('corpse')
@if(Session::has('mensaje'))
<div class="alert {{ Session::get('alert-class') }}">
    {{ Session::get('mensaje') }}
</div>
@endif
<h2>Registrar Digimon</h2>
<form action="{{ route('digimon.store2', $digimon->id) }}" method="POST" enctype="multipart/form-data">
    @include('digimon._form2')
    <input type="reset" class="btn btn-secondary" value="Limpiar campos">
    <input type="submit" class="btn btn-primary" value="Registrar">
</form>
@stop