@extends('plantillas.master')

@section('title')
<title>Rangos</title>
@stop

@section('corpse')
<div>
    <h2 class="text-center mb-5">Rangos</h2>
    <p>El <b>Rank System</b> o <b>Sistema de Rango</b> fue un añadido realizado al juego para categorizar a los digimon en grupos en base a su desempeño en el juego. Dicha categorización surge a partir de las etapas Mega/Ultimate/HiperCampeón de los digimon que podemos tener como compañeros y asciende desde la A, que se considera la más débil, al SSS+, que posee a los Digimon más poderosos (y aquellos vinculados a los micropagos y las lootboxes). Aunque existe en la base de datos del juego el registro de la categoría U y de la categoría U+, aún no existe ningún Digimon asociado a dichas categorías.</p>
</div>
<div id="tabla" class="mt-5">
    <table class="table table-striped table-hover table-bordered border border-dark" style="table-layout: fixed; width:auto; table-layout: auto;">
        <tr class="text-center" style="background-color: darkgrey;">
            <th scope="col">Icono</th>
            <th scope="col">Descripción</th>
        </tr>
        <tr>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/rango/A.png") }}' width="60px" height="50px"></td>
            <td scope="row" class="align-middle">La mayoría de los Digimon en etapa Mega/Ultimate están anexados a este rango. Es el rango de los más débiles, en términos de asignación de rango, que puedes tener como compañeros.</td>
        </tr>
        <tr>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/rango/A+.png") }}' width="60px" height="50px"></td>
            <td scope="row" class="align-middle">Rango todavía predominado por Digimon en etapa Mega/Ultimate. Si bien es superior al anterior, no hay una diferencia verdaderamente significativa en términos de estadísticas y rendimiento.</td>
        </tr>
        <tr>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/rango/S.png") }}' width="60px" height="50px"></td>
            <td scope="row" class="align-middle">Rango donde empiezan a aparecer las Side-Mega (formas Mega/Ultimate alternativas), los Burst Modes (Modos Explosivos) y algunos X-Digimon menores así como el cese de la dominancia de Mega/Ultimate. </td>
        </tr>
        <tr>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/rango/S+.png") }}' width="60px" height="50px"></td>
            <td scope="row" class="align-middle">Rango superior al rango S. Aquí empezamos a ver Digimon que, a nivel de estadísticas y rendimiento, empiezan a ser utilizables tanto para progresar al inicio del juego como para alcanzar el "mid-game".</td>
        </tr>
        <tr>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/rango/SS.png") }}' width="60px" height="50px"></td>
            <td scope="row" class="align-middle">Rango donde empezamos a ver los primeros digimon objetivamente útiles para gran variedad de actividades y el más utilizado de todos los de la lista por los jugadores, debido a la facilidad de obtención actual de la mayoría de los que pertenecen al mismo.</td>
        </tr>
        <tr>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/rango/SS+.png") }}' width="60px" height="50px"></td>
            <td scope="row" class="align-middle">El rango que sobrepasa al normal SS. Estos digimon tienen unas estadísticas y rendimiento acorde a la dificultad cada vez más creciente de obtención. Empezamos a ver tanto Jogress, X-Digimon o Variant Digimon con grandes valores en ciertas estadísticas o con altos daños de habilidad.</td>
        </tr>
        <tr>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/rango/SSS.png") }}' width="60px" height="50px"></td>
            <td scope="row" class="align-middle">Rango que involucra a Digimon extremadamente fuertes, llegando a ser útiles para prácticamente realizar o enfrentar cualquier contenido del juego (con excepciones y ciertas valoraciones a tener en cuenta).</td>
        </tr>
        <tr>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/rango/SSS+.png") }}' width="60px" height="50px"></td>
            <td scope="row" class="align-middle">Rango que sobrepasa al SSS y que posee los Digimon más poderosos del juego en todos los términos, es decir, en estadísticas y en daño de habilidad. También son los más difíciles de obtener y raros (debido a que normalmente van ligados a sistemas de pago abusivos).</td>
        </tr>
        <tr>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/rango/U.png") }}' width="60px" height="50px"></td>
            <td scope="row" class="align-middle">Rango que involucra a Digimon similares a dioses. Pese a que es un rango con digimon tan poderosos, aún no hay registros de los mismos y, por tanto, no existe ningún digimon encasillable en esta categoría.</td>
        </tr>
        <tr>
            <td scope="row" class="align-middle"><img class="rounded mx-auto d-block" src='{{ URL::asset("storage/iconos/rango/U+.png") }}' width="60px" height="50px"></td>
            <td scope="row" class="align-middle">El rango que sobrepasa el rango U y que, teóricamente, contendría a aquellos Digimon que han trascendido la idea de aquello que es considerado un dios. No hay registros todavía.</td>
        </tr>
    </table>
</div>
@stop