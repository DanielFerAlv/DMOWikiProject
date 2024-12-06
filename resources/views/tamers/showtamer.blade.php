@extends("plantillas.master")

@section('title')
<title>Datos de {{ $tamer->nombre }}</title>
@stop

@section('otherstyles')
<style>
    @media (min-width: 500px) {
        .tabladatos {
            max-width: 300px; grid-column-start: 1; grid-column-end: 2;
        }
        .skills {
            grid-column-start: 2; grid-column-end: 5;
        }
    }
    @media (max-width: 500px) {
        .tabladatos {
            grid-column-start: 1;
            grid-column-end: 5;
        }
        .skills {
            grid-column-start: 1; grid-column-end: 5; grid-row-start: 2;
        }
    }
</style>
@stop

@section('corpse')
<h2 class="mb-5">Datos del tamer: {{ $tamer->nombre }}</h2>
<div id="infoandimage" class="align-middle mb-5" style="display: grid; grid-template-columns: repeat(5, 1fr);">
    <div class="border border-dark align-middle d-flex aligns-item-center justify-content-center" style="grid-column-start: 1; grid-column-end: 2; align-items:center;">
        @if($tamer->tamer_model != null)
        <img class="rounded mx-auto d-block align-middle" src='{{ URL::asset("storage/$tamer->tamer_model") }}' style="width: auto; height: auto; max-width: 100%; max-height: 100%;">
        @endif
        @if($tamer->tamer_model == null)
        <img src='{{ URL::asset("storage/digimon/default.png") }}' style="width: 250px; height: 218px;">
        @endif
    </div>
    <div class="border border-dark" style="grid-column-start: 2; grid-column-end: 6; display: grid; grid-template-columns: repeat(2, 1fr); grid-template-rows: repeat(6, 1fr);">
        <div class="border border-dark bg-dark text-white text-center align-middle" style="grid-column-start: 1; grid-column-end: 2; grid-row-start: 1; grid-row-end: 2;">
            Nombre
        </div>
        <div class="border border-dark text-center align-middle" style="grid-column-start: 1; grid-column-end: 2; grid-row-start: 2; grid-row-end: 3;">
            {{ $tamer->nombre }}
        </div>
        <div class="border border-dark bg-dark text-white text-center align-middle" style="grid-column-start: 2; grid-column-end: 3; grid-row-start: 1; grid-row-end: 2;">
            Rol/Utilidad
        </div>
        <div class="border border-dark text-center align-middle" style="grid-column-start: 2; grid-column-end: 3; grid-row-start: 2; grid-row-end: 3;">
            {{ $tamer->utilidad }}
        </div>
        <div class="border border-dark bg-dark text-white text-center align-middle" style="grid-column-start: 1; grid-column-end: 3; grid-row-start: 3; grid-row-end: 4;">
            Descripción
        </div>
        <div class="border border-dark text-center align-middle" style="grid-column-start: 1; grid-column-end: 3; grid-row-start: 4; grid-row-end: 7;">
            {{ $tamer->descripcion }}
        </div>
    </div>
</div>
<div id="datosyskills" style="display: grid; grid-template-columns: repeat(4, 1fr); grid-column-gap: 20px;">
    <div class="tabladatos">
        <h3 class="mt-3 mb-3 border border-dark bg-dark text-white text-center align-middle">Estadísticas</h3>
        <table class="table table-striped table-hover table-bordered border border-dark">
            <thead>
                <tr>
                    <th scope="col">Estadística</th>
                    <th scope="col">Valor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">Vida</td>
                    <td scope="row">{{ $tamer->health_points }}</td>
                </tr>
                <tr>
                    <td scope="row">DS/Maná</td>
                    <td scope="row">{{ $tamer->digisoul_points }}</td>
                </tr>
                <tr>
                    <td scope="row">Ataque</td>
                    <td scope="row">{{ $tamer->attack }}</td>
                </tr>
                <tr>
                    <td scope="row">Defensa</td>
                    <td scope="row">{{ $tamer->defense }}</td>
                </tr>
            </tbody>
        </table>
        <p class="alert alert-info">Nota: Las estadísticas mostradas son con el Tamer a nivel 1.</p>
    </div>
    <div class="skills">
        <h3 class="mt-3 mb-3 border border-dark bg-dark text-white px-3">Habilidad activa</h3>
        <div>
            <p><img src='{{ URL::asset("storage/$tamer->active_skill_icon") }}' style="width: 40px; height: 40px;"> <span class="fw-bold"> {{ $tamer->active_skill_name }}</span> : {{ $tamer->active_skill_effect }}</p>
        </div>
        <h3 class="mt-3 mb-3 border border-dark bg-dark text-white px-3">Habilidad pasiva</h3>
        <p><img src='{{ URL::asset("storage/$tamer->passive_skill_icon") }}' style="width: 40px; height: 40px;"> <span class="fw-bold"> {{ $tamer->passive_skill_name }}</span></p>
        <p>
            @if (str_contains($tamer->passive_skill_effect1, "Vacuna"))
            Efecto 1 de la pasiva: {{ substr($tamer->passive_skill_effect1, 0, (strlen($tamer->passive_skill_effect1) - 7)) }} <img src='{{ URL::asset("storage/iconos/atributos/Vacuna.png") }}' style="width: 40px; height: 40px;">
            @elseif (str_contains($tamer->passive_skill_effect1, "Virus"))
            Efecto 1 de la pasiva: {{ substr($tamer->passive_skill_effect1, 0, (strlen($tamer->passive_skill_effect1) - 6)) }} <img src='{{ URL::asset("storage/iconos/atributos/Virus.png") }}' style="width: 40px; height: 40px;">
            @elseif (str_contains($tamer->passive_skill_effect1, "Datos"))
            Efecto 1 de la pasiva: {{ substr($tamer->passive_skill_effect1, 0, (strlen($tamer->passive_skill_effect1) - 6)) }} <img src='{{ URL::asset("storage/iconos/atributos/Datos.png") }}' style="width: 40px; height: 40px;">
            @elseif (str_contains($tamer->passive_skill_effect1, "Unknown"))
            Efecto 1 de la pasiva: {{ substr($tamer->passive_skill_effect1, 0, (strlen($tamer->passive_skill_effect1) - 8)) }} <img src='{{ URL::asset("storage/iconos/atributos/Unknown.png") }}' style="width: 40px; height: 40px;">
            @else
            Efecto 1 de la pasiva: {{ $tamer->passive_skill_effect1 }} <img src='{{ URL::asset("storage/iconos/atributos/Vacuna.png") }}' style="width: 40px; height: 40px;">
            @endif
        </p>
        <p>
            @if (str_contains($tamer->passive_skill_effect2, "Vacuna"))
            Efecto 1 de la pasiva: {{ substr($tamer->passive_skill_effect2, 0, (strlen($tamer->passive_skill_effect2) - 7)) }} <img src='{{ URL::asset("storage/iconos/atributos/Vacuna.png") }}' style="width: 40px; height: 40px;">
            @elseif (str_contains($tamer->passive_skill_effect2, "Virus"))
            Efecto 1 de la pasiva: {{ substr($tamer->passive_skill_effect2, 0, (strlen($tamer->passive_skill_effect2) - 6)) }} <img src='{{ URL::asset("storage/iconos/atributos/Virus.png") }}' style="width: 40px; height: 40px;">
            @elseif (str_contains($tamer->passive_skill_effect2, "Datos"))
            Efecto 1 de la pasiva: {{ substr($tamer->passive_skill_effect2, 0, (strlen($tamer->passive_skill_effect2) - 6)) }} <img src='{{ URL::asset("storage/iconos/atributos/Datos.png") }}' style="width: 40px; height: 40px;">
            @elseif (str_contains($tamer->passive_skill_effect2, "Unknown"))
            Efecto 1 de la pasiva: {{ substr($tamer->passive_skill_effect2, 0, (strlen($tamer->passive_skill_effect2) - 8)) }} <img src='{{ URL::asset("storage/iconos/atributos/Unknown.png") }}' style="width: 40px; height: 40px;">
            @else
            Efecto 1 de la pasiva: {{ $tamer->passive_skill_effect2 }} <img src='{{ URL::asset("storage/iconos/atributos/Vacuna.png") }}' style="width: 40px; height: 40px;">
            @endif
        </p>
    </div>
</div>
@stop