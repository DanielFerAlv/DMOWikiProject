@extends('plantillas.master')

@section('title')
<title>Familias</title>
@stop

@section('corpse')
<div>
    <h2 class="text-center mb-5">Familias</h2>
    <p>La <b>familia</b>, también conocida como <b>especie</b>, es un grupo generalizado al que un Digimon puede pertenecer. El concepto se origina en los Digimon Pendulum y, generalmente, aquellos que son miembros de una misma 
    familia comparten ciertos aspectos, como es por ejemplo el caso de los Wind Guardians quienes generalmente tienen la capacidad de volar o el de los miembros de Dragon's Roar, que generalmente tienden a asemejarse a dragones. 
    Cada familia es siempre representada con un color y un icono únicos y característicos de la misma.</p>
</div>
<div id="tabla" class="mt-5">
    <table class="table table-striped table-hover table-bordered border border-dark" style="table-layout: fixed; width:auto; table-layout: auto;">
        <tr class="text-center" style="background-color: darkgrey;">
            <th scope="col" style="width:auto;">Icono</th>
            <th scope="col" style="width:auto;">Nombre</th>
            <th scope="col" style="width:auto;">Descripción</th>
        </tr>
        @foreach($familias as $familia)
        <tr>
            <td scope="row" class="align-middle" style="width:auto;"><img src='{{ URL::asset("$familia->foto") }}' width="80px" height="70px"></td>
            <td scope="row" class="text-center align-middle" style="width:auto;">{{ $familia->nombre }}</td>
            <td scope="row" class="align-middle" style="width:auto;">{{ $familia->descripcion }}</td>
        </tr>
        @endforeach
    </table>
</div>
@stop