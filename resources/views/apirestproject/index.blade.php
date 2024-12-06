@extends('plantillas.master')

@section('title')
<title>APIREST Mydmoproject</title>
@stop

@section('corpse')

<div class="container">
    <p class="alert alert-info">Con el fin de facilitar el acceso a datos a todo aquel usuario que tenga interés en hacer su propia aplicación, ya sea a nivel estudiantil o a cualquier otro, presentamos la utilidad de la API REST de MyDMOProject, gracias a la cuál se podrán obtener datos de tanto los Digimon como los Tamers registrados en nuestra base de datos. Recordar que los datos pertenecientes a la misma son en base a la disponibilidad de los mismos, así que pedimos comprensión ante cualquier discrepancia o falta de actualización de los mismos, ya sea por una reciente modificación en un último parche o por ser de Digimon exclusivos de eventos promocionales o de lootboxes de precio elevado. ¡Esperamos que os sirva de gran ayuda!</p>
</div>
<br/>
<div class="container">
    <h3>Rutas disponibles</h3>
    <br/>
    <p class="alert alert-secondary" style="overflow: scroll;">https://mydmoproject.freeddns.org/api/digimon -> Ruta para acceder a los datos de todos los Digimon registrados en la base de datos.</p>
    <p class="alert alert-secondary" style="overflow: scroll;">https://mydmoproject.freeddns.org/api/digimon/{digimon} -> Sustituyendo el valor entre corchetes por un número, permite acceder a los datos de un Digimon concreto registrado en la base de datos.</p>
    <p class="alert alert-secondary" style="overflow: scroll;">https://mydmoproject.freeddns.org/api/tamers -> Ruta para acceder a los datos de todos los Tamers registrados en la base de datos.</p></p>
    <p class="alert alert-secondary" style="overflow: scroll;">https://mydmoproject.freeddns.org/api/tamers/{tamer} -> Sustituyendo el valor entre corchetes por un número, permite acceder a los datos de un Tamer concreto registrado en la base de datos.</p></p>
</div>
@stop