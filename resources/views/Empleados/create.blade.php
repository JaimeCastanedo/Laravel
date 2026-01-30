@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nuevo Empleado</div>

                <div class="card-body">
                    <form action="{{ route('empleados.store') }}" method="POST">
                        @csrf

                        <div class="form-group mb-3">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre') }}" required>
                            @error('nombre')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                            @error('email')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="puesto">Puesto</label>
                            <input type="text" name="puesto" id="puesto" class="form-control @error('puesto') is-invalid @enderror" value="{{ old('puesto') }}">
                            @error('puesto')<span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>

                        <button class="btn btn-primary">Guardar</button>
                        <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
