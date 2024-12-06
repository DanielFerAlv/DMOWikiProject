@extends('plantillas.master')

@section('title')
<title>Atributos</title>
@stop

@section('corpse')
<div>
    <h2 class="text-center mb-5">Atributos</h2>
    <p>Los Digimon están generalmente separados en tres diferentes atributos, "Datos", "Virus" y "Vacuna", dependiendo de la influencia que tienen sobre el entorno y el mundo en el que viven. Digimon con el mismo nombre y diferentes atributos generalmente se ven diferentes y, en algunos casos, poseen ataques diferentes o incluso diferentes tipos. También existen digimon de atributo "Libre" que normalmente se encuentran asociados, en este juego al menos, a los digimon en etapas muy tempranas, es decir, bebés, o aquellos que resultan de uno de los espíritus digitales de los diez antiguos guerreros, aunque algunos de estos si tienen un atributo de los principales (ej, Agnimon es Vacuna pero Lanamon es Libre). Para aquellos Digimon que, por el motivo que sea, no se les puede atribuir ningún atributo, existe el Unknown/Desconocido para definirlos.</p>
    <p>En el juego, los digimon de atributo "Libre" o "None" tienen desventaja natural contra todos. Por el contrario, los Unknown tienen ventaja natural contra todos los demás. Los Virus tienen ventaja contra los "None" o "Libres" y contra los Datos. Los Datos, a su vez, contra los Vacuna y los "None/Libres". Y los Vacuna contra los Virus y los "None/Libres".</p>
    <img class="rounded mx-auto d-block border border-dark p-2" src='{{ URL::asset("storage/iconos/atributos/ventajas.png") }}' style="width: 300px; height: 160px;">
    <br/>
    <p id="exp" class="alert alert-info">Para subir la experiencia de atributo, la acción a seguir depende de cuál sea el mismo en nuestro Digimon. Los Unknown no necesitan subir la experiencia de atributo, sino que la tienen bloqueada en un porcentaje en concreto. Los NoData o Libres y los Datos necesitan que se restauren o devuelvan datos en el NPC Pawnchessmon Black o cualquier otro NPC con la misma funcionalidad (como Izzy en Tokyo-Odaiba) o, si se dispone del Masters Membership, con el propio Digimon Return ahi disponible. Los Vacunas y los Virus solo ganan experiencia de atributo luchando contra su opuesto, es decir, si eres Vacuna, derrota enemigos que sean Virus y te den experiencia y viceversa si eres Virus.</p>
</div>
<div id="tabla" class="mt-5">
    <table class="table table-striped table-hover table-bordered border border-dark" style="table-layout: fixed; width:auto; table-layout: auto;">
        <tr class="text-center" style="background-color: darkgrey;">
            <th scope="col" style="width:auto;">Icono</th>
            <th scope="col" style="width:auto;">Nombre</th>
            <th scope="col" style="width:auto;">Descripción</th>
        </tr>
        <tr>
            <td scope="row" class="align-middle" style="width:auto;"><img src='{{ URL::asset("storage/iconos/atributos/Vacuna.png") }}' width="80px" height="70px"></td>
            <td scope="row" class="text-center align-middle" style="width:auto;">Vacuna</td>
            <td scope="row" class="align-middle" style="width:auto;">Atributo que se asigna a digimon que han sido creados para prevenir la destrucción de datos importantes por parte de los digimon Virus. Tienen un alto instinto de ataque hacia estos así que actúan combatiendolos para proteger el entorno que les rodea y su propio territorio. Por lo general, los Digimon Vacuna suelen estar asociados al bien, siendo aquellos que ponen un gran énfasis en la justicia y la moral.</td>
        </tr>
        <tr>
            <td scope="row" class="align-middle" style="width:auto;"><img src='{{ URL::asset("storage/iconos/atributos/Datos.png") }}' width="80px" height="70px"></td>
            <td scope="row" class="text-center align-middle" style="width:auto;">Datos</td>
            <td scope="row" class="align-middle" style="width:auto;">Atributo que se asigna a digimon cuya composición de datos se asemeja al de los e-mails que son enviados por los ordenadores. Son la excepción a los Virus y a los Vacunas, y requieren de la protección de los segundos para sobrevivir a la caza de los primeros. Simplemente existen de acuerdo al ya establecido entorno y no hacen mucho más para cambiarlo. Su orientación puede ser tanto buena como malvada pero generalmente valoran la paz por encima de todo.</td>
        </tr>
        <tr>
            <td scope="row" class="align-middle" style="width:auto;"><img src='{{ URL::asset("storage/iconos/atributos/Virus.png") }}' width="80px" height="70px"></td>
            <td scope="row" class="text-center align-middle" style="width:auto;">Virus</td>
            <td scope="row" class="align-middle" style="width:auto;">Atributo que se asigna a digimon que devoran datos, reconocidos como malvados por destruir datos de los ordenadores. Las especies Virus buscan modificar el entorno que les rodea de acuerdo a sus deseos. Como resultado, se producen anomalias en el sistema. Desean poder y a menudo se convierten en seres codiciosos, egocéntricos, salvajes o malvados conforme lo buscan. Sin embargo, y pese a esta definición, no todos los Digimon Virus son malvados.</td>
        </tr>
        <tr>
            <td scope="row" class="align-middle" style="width:auto;"><img src='{{ URL::asset("storage/iconos/atributos/Unknown.png") }}' width="80px" height="70px"></td>
            <td scope="row" class="text-center align-middle" style="width:auto;">Unknown</td>
            <td scope="row" class="align-middle" style="width:auto;">Atributo que se asigna a digimon que, por el motivo que sea no pueden ser catalogados en ningún otro atributo.</td>
        </tr>
        <tr>
            <td scope="row" class="align-middle" style="width:auto;"><img src='{{ URL::asset("storage/iconos/atributos/None.png") }}' width="80px" height="70px"></td>
            <td scope="row" class="text-center align-middle" style="width:auto;">None/Libre</td>
            <td scope="row" class="align-middle" style="width:auto;">Atributo que se asigna a digimon relacionados con las etapas iniciales evolutivas (baby, in-trainning) o con los Digimon Hybrid o Híbridos (resultado de unir humano o digimon con un espíritu de los diez antiguos guerreros, tanto humanos como bestias).</td>
        </tr>
    </table>
</div>
@stop