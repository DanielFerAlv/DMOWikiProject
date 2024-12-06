@extends("plantillas.master")

@section("title")
<title>Listado de Tamers</title>
@stop


@section("corpse")
@if(Session::has('mensaje'))
<div class="alert {{ Session::get('alert-class') }}">
    {{ Session::get('mensaje') }}
</div>
@endif
<h2 class="mb-5">Listado de Tamers en la versión Global (GDMO)</h2>
@if (count($tamers) === 0)
    <p>No hay ahora mismo registros de Tamers en la Wiki. Posiblemente están en proceso, así que, ¡atento a las novedades!</p>
@else
<table class="table text-center align-middle" style="margin-top: 32px;">
    <thead>
        <tr>
            <th scope="col">Icono</th>
            <th scope="col">Nombre</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tamers as $tamer)
        <tr>
            <td scope="row">
                @if($tamer->tamer_icon != null)
                <a href="{{ route('tamer.show',$tamer) }}"><img src='{{ URL::asset("storage/$tamer->tamer_icon") }}' style="width: 45px; height: 45px;"></a>
                @endif
                @if($tamer->tamer_icon == null)
                <a href="{{ route('tamer.show',$tamer) }}"><img src='{{ URL::asset("storage/iconos/default.png") }}' style="width: 45px; height: 45px;"></a>
                @endif
            </td>
            <td scope="row">{{ $tamer->nombre }}</td>
            <td scope="row">
                <a href="{{ route('tamer.show',$tamer) }}" class="btn btn-info text-white">Info</a>
                @auth
                @if(Auth::user()->isadmin === 1)
                <a href="{{ route('tamer.edit',$tamer) }}" class="btn btn-success text-white">Editar</a>
                <form style="display:inline;" action="{{ route('tamer.destroy',$tamer) }}" method="POST">@csrf @method('DELETE') <input type="submit" class="btn btn-danger text-white" value="Borrar"/></form>
                @endif
                @endauth
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
@stop