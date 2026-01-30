@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalles del Cliente</div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <p class="form-control-plaintext">{{ $cliente->nombre }}</p>
                    </div>

                    <div class="form-group">
                        <label for="apellido">Apellido:</label>
                        <p class="form-control-plaintext">{{ $cliente->apellido }}</p>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <p class="form-control-plaintext">{{ $cliente->email }}</p>
                    </div>

                    <div class="form-group">
                        <label for="telefono">Teléfono:</label>
                        <p class="form-control-plaintext">{{ $cliente->telefono ?? 'N/A' }}</p>
                    </div>

                    <div class="form-group">
                        <label for="direccion">Dirección:</label>
                        <p class="form-control-plaintext">{{ $cliente->direccion ?? 'N/A' }}</p>
                    </div>

                    <div class="mt-3">
                        <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning">Editar</a>
                        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
