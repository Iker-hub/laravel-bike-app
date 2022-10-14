@extends('app.base')

@section('content')
<div>
    @if ($errors->any())
        <div class="alert alert-danger">
            La bicicicleta no se ha guardado, por favor corrige los errores.
        </div>
        @error('update')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    @endif
    <form action="{{ url('bike/1') }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="nombre">Nombre bicicleta</label>
            <input value="{{ old('nombre', 'Bicicleta') }}" required type="text" minlength="2" maxlength="100" class="form-control" id="nombre" name="nombre" placeholder="Nombre bicicleta">
            @error('nombre')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="precio">Precio bicicleta</label>
            <input value="{{ old('precio', '25.000') }}" required type="number" min="0" step="0.001" class="form-control" id="precio" name="precio" placeholder="Precio bicicleta">
            @error('precio')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <a href="{{ url('bike') }}" class="btn btn-primary">Volver</a>
        &nbsp;
        <form action="{{ url('bike/1') }}" method="put">
            @method('put')
            @csrf
            <input type="submit" class="btn btn-primary" value="Editar"/>
        </form>
    </form>
</div>
@endsection
