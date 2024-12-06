@extends('plantillas.master')

@section("title")
<title>Listado de Digimon</title>
@stop

@section('otherstyles')
<style>
    @media (max-width:540px) {
        .prescindible {
            display: none;
        }
        #info1, #edit1, #del1 {
            display: none;
        }
        #info2, #edit2, #del2 {
            display: block;
            width: 100%;
        }
    }
    @media (min-width:540px) {
        #info1, #edit1, #del1 {
            display: inline-block;
        }
        #info2, #edit2, #del2 {
            display: none;
        }
    }
</style>
@stop

@section("corpse")
@if(Session::has('mensaje'))
<div class="alert {{ Session::get('alert-class') }}">
    {{ Session::get('mensaje') }}
</div>
@endif
<h2 class="h2">Listado de Digimon en la versión global (GDMO)</h2>
@if (count($digimon) === 0) 
    <p>No hay ahora mismo registros de Digimon en la Wiki. Posiblemente están en proceso, así que, ¡atento a las novedades!</p>
@else
<table class="table text-center align-middle" style="margin-top: 32px;">
    <thead>
        <tr>
            <th scope="col">Icono</th>
            <th scope="col">Nombre</th>
            <th class="prescindible" scope="col">Rango</th>
            <th class="prescindible" scope="col">Atributo</th>
            <th class="prescindible" scope="col">Tipo</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($digimon as $monster)
        <tr>
            <td scope="row">
                @if($monster->icono != null)
                <a href="{{ route('digimon.show',$monster) }}"><img src='{{ URL::asset("storage/$monster->icono") }}' style="width: 45px; height: 45px;"></a>
                @endif
                @if($monster->icono == null)
                <a href="{{ route('digimon.show',$monster) }}"><img src='{{ URL::asset("storage/iconos/default.png") }}' style="width: 45px; height: 45px;"></a>
                @endif
            </td>
            <td scope="row">{{ $monster->nombre }}</td>
            <td class="prescindible" scope="row">{{ $monster->rango }}</td>
            <td class="prescindible" scope="row">{{ $monster->atributo }}</td>
            <td class="prescindible" scope="row">{{ $monster->tipo }}</td>
            <td scope="row">
                <a id="info1" href="{{ route('digimon.show',$monster) }}" class="btn btn-info text-white">Info</a>
                @auth
                @if(Auth::user()->isadmin === 1)
                <a id="edit1" href="{{ route('digimon.edit',$monster) }}" class="btn btn-success text-white">Editar</a>
                <form style="display:inline;" action="{{ route('digimon.destroy',$monster) }}" method="POST">@csrf @method('DELETE') <input id="del1" type="submit" class="btn btn-danger text-white" value="Borrar"/></form>
                @endif
                @endauth
                <a id="info2" href="{{ route('digimon.show',$monster) }}" class="btn btn-info text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                    </svg>
                </a>
                @auth
                @if(Auth::user()->isadmin === 1)
                <a id="edit2" href="{{ route('digimon.edit',$monster) }}" class="btn btn-success text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                    </svg>
                </a>
                <form style="display:inline;" action="{{ route('digimon.destroy',$monster) }}" method="POST">@csrf @method('DELETE') <button id="del2" type="submit" class="btn btn-danger text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                </svg>
                </button></form>
                @endif
                @endauth
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
<div style="display: flex; justify-content: center; margin-top: 32px;">
{{ $digimon->links() }}
</div>
@stop