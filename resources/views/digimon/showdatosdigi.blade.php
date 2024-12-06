@extends('plantillas.master')

@section('title')
<title>Datos de {{ $digimon->nombre }}</title>
@stop

@section('otherstyles')
<style>
    @media (min-width: 768px) {
        #skills {
            display: block;
        }
        #skills2 {
            display: none;
        }
        #stats {
            max-width: 300px; grid-column-start: 1; grid-column-end: 2;
        }
        #proscontras {
            grid-column-start: 2; grid-column-end: 5;
        }
    }
    @media (max-width: 768px) {
        #skills {
            display: none;
        }
        #skills2 {
            display: block;
        }
        #stats {
            grid-column-start: 1; grid-column-end: 5;
        }
        #proscontras {
            grid-column-start: 1; grid-column-end: 5; grid-row-start: 2;
        }
    }
    
</style>
@stop

@section('corpse')
<h1>Datos de {{ $digimon->nombre }}</h1>
<br />
<div id="infoandimage" class="border border-dark align-middle" style="display: grid; grid-template-columns: repeat(5, 1fr);">
    <div class="border border-dark align-middle d-flex aligns-item-center justify-content-center" style="grid-column-start: 1; grid-column-end: 2; align-items:center;">
        @if($digimon->foto != null)
        <img class="rounded mx-auto d-block align-middle" src='{{ URL::asset("storage/$digimon->foto") }}' style="width: auto; height: auto; max-width: 100%; max-height: 100%;">
        @endif
        @if($digimon->foto == null)
        <img src='{{ URL::asset("storage/digimon/default.png") }}' style="width: 250px; height: 218px;">
        @endif
    </div>
    <div class="border border-dark" style="grid-column-start: 2; grid-column-end: 6; display: grid; grid-template-columns: repeat(3, 1fr); grid-template-rows: repeat(6, 1fr);">
            <div class="border border-dark bg-dark text-white text-center align-middle" style="grid-column-start: 1; grid-column-end: 2;">
                Nombre
            </div>
            <div class="border border-dark text-center align-middle" style="grid-column-start: 1; grid-column-end: 2; word-break: break-all;">
                {{ $digimon->nombre }}
            </div>
            <div class="border border-dark bg-dark text-white text-center align-middle" style="grid-column-start: 1; grid-column-end: 2; word-break: break-all;">
                Nivel
            </div>
            <div class="border border-dark text-center align-middle" style="grid-column-start: 1; grid-column-end: 2; word-break: break-all;">
                {{ $digimon->nivel }}
            </div>
            <div class="border border-dark bg-dark text-white text-center align-middle" style="grid-column-start: 1; grid-column-end: 2; word-break: break-all;">
                Utilidad
            </div>
            <div class="border border-dark text-center align-middle" style="grid-column-start: 1; grid-column-end: 2; word-break: break-all;">
                {{ $digimon->utilidad }}
            </div>
            <div class="border border-dark bg-dark text-white text-center align-middle" style="grid-column-start: 2; grid-column-end: 3; grid-row-start: 1; word-break: break-all;">
                Rango
            </div>
            <div class="border border-dark text-center align-middle" style="grid-column-start: 2; grid-column-end: 3; grid-row-start:2; grid-row-end: 4;">
                <a href="{{ route('digimon.rangos') }}"><img src='{{ URL::asset("storage/iconos/rango/$digimon->rango") }}.png' width="80px" height="60px"></a>
            </div>
            <div class="border border-dark bg-dark text-white text-center align-middle" style="grid-column-start: 2; grid-column-end: 3; grid-row-start: 4; word-break: break-all;">
                Atributo y tipo
            </div>
            <div class="border border-dark text-center align-middle" style="grid-column-start: 2; grid-column-end: 3; grid-row-start:5; grid-row-end: 7;">
                <a href="{{ route('digimon.atributos') }}"><img src='{{ URL::asset("storage/iconos/atributos/$digimon->atributo") }}.png' width="80px" height="70px"></a>
                <a href="{{ route('digimon.tipos') }}"><img src='{{ URL::asset("storage/iconos/tipos/$digimon->tipo") }}.png' width="80px" height="70px"></a>
            </div>
            <div class="border border-dark bg-dark text-white text-center align-middle" style="grid-column-start: 3; grid-column-end: 4; grid-row-start: 1; grid-row-end: 2; word-break: break-all;">
                Familias
            </div>
            <div class="border border-dark text-white text-center align-middle" style="grid-column-start: 3; grid-column-end: 4; grid-row-start: 2; grid-row-end: 7">
                @foreach($familiasdigi as $familiadigi)
                <?php
                    $aux = $familias[($familiadigi->familia_id) - 1]
                ?>
                <a href="{{ route('digimon.familias') }}"><img src='{{ URL::asset("$aux->foto") }}' width="80px" height="70px"></a>
                <br/>
                @endforeach
            </div>
    </div>
    <div class="border border-dark bg-dark text-white text-center align-middle" style="grid-column-start: 1; grid-column-end: 6;">
        <h4 class="m-2">Descripción</h4>
    </div>
    <div class="border border-dark" style="grid-column-start: 1; grid-column-end: 6;">
        <p class="m-2">{{ $digimon->descripcion }}</p>
    </div>
</div>
<br />
<div id="datos" style="display: grid; grid-template-columns: repeat(4, 1fr); grid-column-gap: 20px;">
    <div id="stats">
        <h3 class="mt-3 mb-3 border border-dark bg-dark text-white text-center align-middle">Estadísticas</h3>
        <table class="table table-striped table-hover table-bordered border border-dark">
            <tr>
                <th scope="col">Estadística</th>
                <th scope="col">Valor</th>
            </tr>
            <tr>
                <td scope="row">Vida</td>
                <td scope="row">{{ $digimon->health_points }}</td>
            </tr>
            <tr>
                <td scope="row">Maná</td>
                <td scope="row">{{ $digimon->digisoul_points }}</td>
            </tr>
            <tr>
                <td scope="row">Ataque</td>
                <td scope="row">{{ $digimon->attack }}</td>
            </tr>
            <tr>
                <td scope="row">Velocidad Ataque</td>
                <td scope="row">{{ $digimon->attack_speed }}</td>
            </tr>
            <tr>
                <td scope="row">Probabilidad Critico</td>
                <td scope="row">{{ $digimon->critical_chance }}%</td>
            </tr>
            <tr>
                <td scope="row">Hitrate</td>
                <td scope="row">{{ $digimon->hitrate }}</td>
            </tr>
            <tr>
                <td scope="row">Defensa</td>
                <td scope="row">{{ $digimon->defense }}</td>
            </tr>
            <tr>
                <td scope="row">Evasion</td>
                <td scope="row">{{ $digimon->evasion }}%</td>
            </tr>
        </table>
    </div>
    @if (count($proscontrasdigi) === 0)
    @else
    <div id="proscontras">
        <?php
            $aux2 = array();
            $aux3 = array();
            for($i = 0; $i < count($proscontrasdigi); $i++) {
                if($proscontras[($proscontrasdigi[$i]->procontra_id) - 1]->pro_contra === 0) {
                    array_push($aux2, $proscontras[($proscontrasdigi[$i]->procontra_id) - 1]->descripcion);
                } else {
                    array_push($aux3, $proscontras[($proscontrasdigi[$i]->procontra_id) - 1]->descripcion);
                }
            }
        ?>
        <h3 class="mt-3 p-1 bg-dark text-white">Pros:</h3>
        <ul>
        @foreach($aux2 as $pro)
        <li>{{ $pro }}</li>
        @endforeach
        </ul>   
        <h3 class="p-1 bg-dark text-white">Contras: </h3>
        <ul>
        @foreach($aux3 as $contra)
        <li>{{ $contra }}</li>
        @endforeach
        </ul>
    </div>
    @endif
</div>
<br />
<div class="text-center" id="skills">
    <h2 class="mt-3 mb-3 border border-dark bg-dark text-white text-center align-middle">Habilidades</h2>
    <table class="table table-striped table-hover table-bordered text-center border border-dark align-middle" style="table-layout: fixed;">
        <tr>
            <th scope="col">Ataque</th>
            @for($i = 0; $i < 12; $i++) <th scope="col">Lv{{ $i + 1 }}</th>
                @endfor
        </tr>
        <tr>
            <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill1 }}</td>
            @for($i = 0; $i < 12; $i++) <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill1_base + ($i * $digimon->skill1_increment)}}</td>
                @endfor
        </tr>
        <tr>
            <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill2 }}</td>
            @for($i = 0; $i < 12; $i++) <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill2_base + ($i * $digimon->skill2_increment)}}</td>
                @endfor
        </tr>
        @if($digimon->skill3 != null)
        <tr>
            <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill3 }}</td>
            @for($i = 0; $i < 12; $i++) <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill3_base + ($i * $digimon->skill3_increment)}}</td>
                @endfor
        </tr>
        @endif
        @if($digimon->skill4 != null)
        <tr>
            <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill4 }}</td>
            @for($i = 0; $i < 12; $i++) <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill4_base + ($i * $digimon->skill4_increment)}}</td>
                @endfor
        </tr>
        @endif
    </table>
    <table class="table table-striped table-hover table-bordered text-center border border-dark align-middle" style="table-layout: fixed;">
        <tr>
            @for($i = 12; $i < 25; $i++) <th scope="col">Lv{{ $i + 1 }}</th>
                @endfor
        </tr>
        <tr>
            @for($i = 12; $i < 25; $i++) <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill1_base + ($i * $digimon->skill1_increment)}}</td>
                @endfor
        </tr>
        <tr>
            @for($i = 12; $i < 25; $i++) <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill2_base + ($i * $digimon->skill2_increment)}}</td>
                @endfor
        </tr>
        @if($digimon->skill3 != null)
        <tr>
            @for($i = 12; $i < 25; $i++) <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill3_base + ($i * $digimon->skill3_increment)}}</td>
                @endfor
        </tr>
        @endif
        @if($digimon->skill4 != null)
        <tr>
            @for($i = 12; $i < 25; $i++) <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill4_base + ($i * $digimon->skill4_increment)}}</td>
                @endfor
        </tr>
        @endif
    </table>
</div>
<div class="text-center" id="skills2">
    <h2 class="mt-3 mb-3 border border-dark bg-dark text-white text-center align-middle">Habilidades</h2>
    <table class="table table-striped table-hover table-bordered text-center border border-dark align-middle" style="table-layout: fixed;">
        <tr>
            <th scope="col" style="overflow: hidden; text-overflow: ellipsis;">ATK</th>
            @for($i = 0; $i < 4; $i++) <th scope="col" style="overflow: hidden; text-overflow: ellipsis;">Lv{{ $i + 1 }}</th>
                @endfor
        </tr>
        <tr>
            <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill1 }}</td>
            @for($i = 0; $i < 4; $i++) <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill1_base + ($i * $digimon->skill1_increment)}}</td>
                @endfor
        </tr>
        <tr>
            <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill2 }}</td>
            @for($i = 0; $i < 4; $i++) <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill2_base + ($i * $digimon->skill2_increment)}}</td>
                @endfor
        </tr>
        @if($digimon->skill3 != null)
        <tr>
            <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill3 }}</td>
            @for($i = 0; $i < 4; $i++) <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill3_base + ($i * $digimon->skill3_increment)}}</td>
                @endfor
        </tr>
        @endif
        @if($digimon->skill4 != null)
        <tr>
            <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill4 }}</td>
            @for($i = 0; $i < 4; $i++) <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill4_base + ($i * $digimon->skill4_increment)}}</td>
                @endfor
        </tr>
        @endif
    </table>
    <table class="table table-striped table-hover table-bordered text-center border border-dark align-middle" style="table-layout: fixed;">
        <tr>
            @for($i = 4; $i < 9; $i++) <th scope="col" style="overflow: hidden; text-overflow: ellipsis;">Lv{{ $i + 1 }}</th>
                @endfor
        </tr>
        <tr>
            @for($i = 4; $i < 9; $i++) <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill1_base + ($i * $digimon->skill1_increment)}}</td>
                @endfor
        </tr>
        <tr>
            @for($i = 4; $i < 9; $i++) <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill2_base + ($i * $digimon->skill2_increment)}}</td>
                @endfor
        </tr>
        @if($digimon->skill3 != null)
        <tr>
            @for($i = 4; $i < 9; $i++) <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill3_base + ($i * $digimon->skill3_increment)}}</td>
                @endfor
        </tr>
        @endif
        @if($digimon->skill4 != null)
        <tr>
            @for($i = 4; $i < 9; $i++) <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill4_base + ($i * $digimon->skill4_increment)}}</td>
                @endfor
        </tr>
        @endif
    </table>
    <table class="table table-striped table-hover table-bordered text-center border border-dark align-middle" style="table-layout: fixed;">
        <tr>
            @for($i = 9; $i < 14; $i++) <th scope="col" style="overflow: hidden; text-overflow: ellipsis;">Lv{{ $i + 1 }}</th>
                @endfor
        </tr>
        <tr>
            @for($i = 9; $i < 14; $i++) <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill1_base + ($i * $digimon->skill1_increment)}}</td>
                @endfor
        </tr>
        <tr>
            @for($i = 9; $i < 14; $i++) <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill2_base + ($i * $digimon->skill2_increment)}}</td>
                @endfor
        </tr>
        @if($digimon->skill3 != null)
        <tr>
            @for($i = 9; $i < 14; $i++) <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill3_base + ($i * $digimon->skill3_increment)}}</td>
                @endfor
        </tr>
        @endif
        @if($digimon->skill4 != null)
        <tr>
            @for($i = 9; $i < 14; $i++) <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill4_base + ($i * $digimon->skill4_increment)}}</td>
                @endfor
        </tr>
        @endif
    </table>
    <table class="table table-striped table-hover table-bordered text-center border border-dark align-middle" style="table-layout: fixed;">
        <tr>
            @for($i = 14; $i < 19; $i++) <th scope="col" style="overflow: hidden; text-overflow: ellipsis;">Lv{{ $i + 1 }}</th>
                @endfor
        </tr>
        <tr>
            @for($i = 14; $i < 19; $i++) <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill1_base + ($i * $digimon->skill1_increment)}}</td>
                @endfor
        </tr>
        <tr>
            @for($i = 14; $i < 19; $i++) <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill2_base + ($i * $digimon->skill2_increment)}}</td>
                @endfor
        </tr>
        @if($digimon->skill3 != null)
        <tr>
            @for($i = 14; $i < 19; $i++) <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill3_base + ($i * $digimon->skill3_increment)}}</td>
                @endfor
        </tr>
        @endif
        @if($digimon->skill4 != null)
        <tr>
            @for($i = 14; $i < 19; $i++) <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill4_base + ($i * $digimon->skill4_increment)}}</td>
                @endfor
        </tr>
        @endif
    </table>
    <table class="table table-striped table-hover table-bordered text-center border border-dark align-middle" style="table-layout: fixed;">
        <tr>
            @for($i = 19; $i < 24; $i++) <th scope="col" style="overflow: hidden; text-overflow: ellipsis;">Lv{{ $i + 1 }}</th>
                @endfor
        </tr>
        <tr>
            @for($i = 19; $i < 24; $i++) <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill1_base + ($i * $digimon->skill1_increment)}}</td>
                @endfor
        </tr>
        <tr>
            @for($i = 19; $i < 24; $i++) <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill2_base + ($i * $digimon->skill2_increment)}}</td>
                @endfor
        </tr>
        @if($digimon->skill3 != null)
        <tr>
            @for($i = 19; $i < 24; $i++) <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill3_base + ($i * $digimon->skill3_increment)}}</td>
                @endfor
        </tr>
        @endif
        @if($digimon->skill4 != null)
        <tr>
            @for($i = 19; $i < 24; $i++) <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill4_base + ($i * $digimon->skill4_increment)}}</td>
                @endfor
        </tr>
        @endif
    </table>
    <table class="table table-striped table-hover table-bordered text-center border border-dark align-middle" style="table-layout: fixed;">
        <tr>
            @for($i = 24; $i < 25; $i++) <th scope="col" style="overflow: hidden; text-overflow: ellipsis;">Lv{{ $i + 1 }}</th>
                @endfor
        </tr>
        <tr>
            @for($i = 24; $i < 25; $i++) <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill1_base + ($i * $digimon->skill1_increment)}}</td>
                @endfor
        </tr>
        <tr>
            @for($i = 24; $i < 25; $i++) <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill2_base + ($i * $digimon->skill2_increment)}}</td>
                @endfor
        </tr>
        @if($digimon->skill3 != null)
        <tr>
            @for($i = 24; $i < 25; $i++) <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill3_base + ($i * $digimon->skill3_increment)}}</td>
                @endfor
        </tr>
        @endif
        @if($digimon->skill4 != null)
        <tr>
            @for($i = 24; $i < 25; $i++) <td scope="row" style="overflow: hidden;text-overflow: ellipsis; word-wrap: break-word;">{{ $digimon->skill4_base + ($i * $digimon->skill4_increment)}}</td>
                @endfor
        </tr>
        @endif
    </table>
</div>
@if($digimon->skill1_special != null || $digimon->skill2_special != null || $digimon->skill3_special != null || $digimon->skill4_special != null)
<div>
    <div id="specialeffects">
        <ul>
        @if($digimon->skill1_special != null)
            <li>Efecto especial del F1 (habilidad 1): {{ $digimon->skill1_special }}</li>
        @endif
        @if($digimon->skill2_special != null)
            <li>Efecto especial del F2 (habilidad 2): {{ $digimon->skill2_special }}</li>
        @endif
        @if($digimon->skill3_special != null)
            <li>Efecto especial del F3 (habilidad 3): {{ $digimon->skill3_special }}</li>
        @endif
        @if($digimon->skill4_special != null)
            <li>Efecto especial del F4 (habilidad 4): {{ $digimon->skill4_special }}</li>
        @endif
        </ul>
    </div>
</div>
@endif
@stop