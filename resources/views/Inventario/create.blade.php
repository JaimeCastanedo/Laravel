@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nuevo Ítem de Inventario</div>

                <div class="card-body">
                    <form action="{{ route('inventario.store') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="item">Item</label>
                            <input type="text" name="item" id="item" class="form-control @error('item') is-invalid @enderror" value="{{ old('item') }}" required>
                            @error('item')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="cantidad">Cantidad</label>
                            <input type="number" name="cantidad" id="cantidad" class="form-control @error('cantidad') is-invalid @enderror" value="{{ old('cantidad', 0) }}" required>
                            @error('cantidad')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="ubicacion">Ubicación</label>
                            <input type="text" name="ubicacion" id="ubicacion" class="form-control @error('ubicacion') is-invalid @enderror" value="{{ old('ubicacion') }}">
                            @error('ubicacion')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>

                        <button class="btn btn-primary">Guardar</button>
                        <a href="{{ route('inventario.index') }}" class="btn btn-secondary">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
