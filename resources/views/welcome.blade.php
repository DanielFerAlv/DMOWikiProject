@extends("plantillas.master")

@section("title")
<title>GDMO Wiki Project</title>
@stop

@section('corpse')
<h1 class="text-center mb-3">GDMO Wiki Project</h1>
<img class="rounded mx-auto d-block align-middle mb-3" src='{{ URL::asset("storage/dmopic.png") }}' style="width: auto; height: auto; max-width: 100%; max-height: 100%;"/>
<p class="text-center">Projecto creado con el fin de crear una Wiki sencilla y con datos de consulta común del MMORPG Digimon Masters Online, por y para la comunidad que lo forma.</p>
<p class="text-center">El juego actualmente se encuentra disponible únicamente para PC a través de la <a href="https://dmo.gameking.com/Main/Main.aspx">página web oficial de Gameking</a> así como en la plataforma online de <a href="https://store.steampowered.com/app/537180/Digimon_Masters_Online/">Steam</a>.</p>
<h4 class="text-center">Video tráiler</h4>
<div class="d-flex aligns-item-center justify-content-center">
    <iframe class="text-center" width="560" height="315" src="https://www.youtube.com/embed/JiU86yomtx0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
@stop
