@csrf

<?php
    $aux1 = [];
    foreach($digifamilias as $digifamilia){
        array_push($aux1, $digifamilia->familia_id);
    }
    
    $aux2 = [];
    foreach($digiproscontras as $procontra){
        array_push($aux2, $procontra->procontra_id);
    }
?>

<div>
    <h2>Escoje las familias a las que pertenece {{ $digimon->nombre }}</h2>
    @foreach ($familias as $familia)
    <div class="form-check form-check-inline mt-3">
        @if(in_array($familia->id, $aux1))
        <input class="form-check-input" type="checkbox" id="{{$familia->nombre}}" name="familia[]" value="{{$familia->id}}" checked>
        @else
        <input class="form-check-input" type="checkbox" id="{{$familia->nombre}}" name="familia[]" value="{{$familia->id}}">
        @endif
        <label class="form-check-label" for="{{$familia->nombre}}">{{$familia->nombre}}</label>
    </div>
    @endforeach
</div>
<br/>
<div class="mt-3">
    <h2 class="mb-3">Escoje los pros y los contras de {{ $digimon->nombre }}</h2>
    <h4 class="mb-2">Pros:</h4>
    @foreach ($proscontras as $procontra)
    @if($procontra->pro_contra == 0)
    <div class="form-check mb-3">
        @if(in_array($procontra->id, $aux2))
        <input class="form-check-input" type="checkbox" id="{{$procontra->id}}" name="procontra[]" value="{{$procontra->id}}" checked>
        @else
        <input class="form-check-input" type="checkbox" id="{{$procontra->id}}" name="procontra[]" value="{{$procontra->id}}">
        @endif
        <label class="form-check-label" for="{{$procontra->id}}">{{$procontra->descripcion}}</label>
    </div>
    @endif
    @endforeach
    <h4 class="mb-2">Contras:</h4>
    @foreach ($proscontras as $procontra)
    @if($procontra->pro_contra == 1)
    <div class="form-check mb-3">
    @if(in_array($procontra->id, $aux2))
        <input class="form-check-input" type="checkbox" id="{{$procontra->id}}" name="procontra[]" value="{{$procontra->id}}" checked>
        @else
        <input class="form-check-input" type="checkbox" id="{{$procontra->id}}" name="procontra[]" value="{{$procontra->id}}">
        @endif
        <label class="form-check-label" for="{{$procontra->id}}">{{$procontra->descripcion}}</label>
    </div>
    @endif
    @endforeach
</div>