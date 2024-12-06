@extends('plantillas.master')

@section('title')
<title>Tipos</title>
@stop

@section('corpse')
<div>
    <h2 class="text-center mb-5">Tipos</h2>
    <p>Todos los digimon del juego tienen, a mayores de sus familias y su atributo, un elemento o tipo asociado. Dicho tipo sirve para abrir más profundidad de cara a las relaciones de fortaleza/debilidad entre los que podemos tener como compañeros y los enemigos, que se corresponden tanto a Digimon jugables como no jugables. Éstas deben tenerse en mucha consideración a la hora de afrontar los grandes retos del juego.</p>
    <p>Generalmente, todo atributo es fuerte contra otro y débil contra otro, manteniendo neutralidad con el resto. La excepción a esto es el tipo Neutral, que es débil contra todos los demás atributos. Actualmente, no existe ningun Digimon obtenible como compañero que tenga este último.</p>
    <p class="alert alert-info">La experiencia de Tipo de tu digimon se adquiere de la misma manera que con los Atributos. Para saber más, vease <a href="{{ route('digimon.atributos') }}#exp">Atributos</a></p>
</div>
<div id="tabla" class="mt-5">
    <table class="table table-striped table-hover table-bordered border border-dark table-responsive-sm" style="table-layout: fixed;">
        <tr class="text-center" style="background-color: darkgrey;">
            <th scope="col" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Icono</th>
            <th scope="col" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Nombre</th>
            <th scope="col" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Débil contra</th>
            <th scope="col" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Fuerte contra</th>
        </tr>
        <tr>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/tipos/Fuego.png") }}'></td>
            <td scope="row" class="text-center align-middle" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Fuego</td>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/tipos/Agua.png") }}'></td>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/tipos/Hielo.png") }}'></td>
        </tr>
        <tr>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/tipos/Agua.png") }}'></td>
            <td scope="row" class="text-center align-middle" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Agua</td>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/tipos/Hielo.png") }}'></td>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/tipos/Fuego.png") }}'></td>
        </tr>
        <tr>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/tipos/Hielo.png") }}'></td>
            <td scope="row" class="text-center align-middle" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Hielo</td>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/tipos/Fuego.png") }}'></td>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/tipos/Agua.png") }}'></td>
        </tr>
        <tr>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/tipos/Tierra.png") }}'></td>
            <td scope="row" class="text-center align-middle" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Tierra</td>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/tipos/Madera.png") }}'></td>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/tipos/Viento.png") }}'></td>
        </tr>
        <tr>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/tipos/Madera.png") }}'></td>
            <td scope="row" class="text-center align-middle" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Madera</td>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/tipos/Viento.png") }}'></td>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/tipos/Tierra.png") }}'></td>
        </tr>
        <tr>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/tipos/Viento.png") }}'></td>
            <td scope="row" class="text-center align-middle" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Viento</td>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/tipos/Tierra.png") }}'></td>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/tipos/Madera.png") }}'></td>
        </tr>
        <tr>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/tipos/Luz.png") }}'></td>
            <td scope="row" class="text-center align-middle" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Luz</td>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/tipos/Acero.png") }}'></td>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/tipos/Oscuridad.png") }}'></td>
        </tr>
        <tr>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/tipos/Oscuridad.png") }}'></td>
            <td scope="row" class="text-center align-middle" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Oscuridad</td>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/tipos/Luz.png") }}'></td>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/tipos/Trueno.png") }}'></td>
        </tr>
        <tr>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/tipos/Trueno.png") }}'></td>
            <td scope="row" class="text-center align-middle" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Trueno</td>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/tipos/Oscuridad.png") }}'></td>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/tipos/Acero.png") }}'></td>
        </tr>
        <tr>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/tipos/Acero.png") }}'></td>
            <td scope="row" class="text-center align-middle" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Acero</td>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/tipos/Trueno.png") }}'></td>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/tipos/Luz.png") }}'></td>
        </tr>
        <tr>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/tipos/Neutral.png") }}'></td>
            <td scope="row" class="text-center align-middle" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Neutral</td>
            <td scope="row" class="text-center align-middle" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Todo</td>
            <td scope="row" class="text-center align-middle" style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">Nada</td>
        </tr>
    </table>
</div>
@stop