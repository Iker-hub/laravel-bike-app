@extends('app.base')

@section('content')
<div>
    <div class="row" style="margin-top: 8px;">
        ID Bicicleta: {{ 1 }}
    </div>
    <div class="row" style="margin-top: 8px;">
        Nombre Bicicleta: {{ "Bicicleta 1" }}
    </div>
    <div class="row" style="margin-top: 8px;">
        Precio Bicicleta: {{ 25.000 }}
    </div>
    <div class="row" style="margin-top: 8px;">
        <a href="{{ url()->previous() }}" class="btn btn-primary">Volver</a>
    </div>
</div>
@endsection