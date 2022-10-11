@extends('app.base')

@section('content')
<div>
    @if ($errors->any())
        <div class="alert alert-danger">
            La bicicicleta no se ha guardado, por favor corrige los errores.
        </div>
        @error('store')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    @endif
    <form action="{{ url('bike') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre bicicleta</label>
            <input value="{{ old('nombre') }}" required type="text" minlength="2" maxlength="100" class="form-control" id="tipo" name="tipo" placeholder="Nombre bicicleta">
            @error('nombre')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="precio">Precio bicicleta</label>
            <input value="{{ old('precio') }}" required type="number" min="0" step="0.001" class="form-control" id="precio" name="precio" placeholder="Precio bicicleta">
            @error('precio')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Añadir</button>
        &nbsp;
        <a href="{{ url('bike') }}" class="btn btn-primary">Volver</a>
    </form>
</div>
@endsection