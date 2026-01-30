@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalles del Producto</div>

                <div class="card-body">
                    <p><strong>Nombre:</strong> {{ $producto->nombre }}</p>
                    <p><strong>Descripción:</strong> {{ $producto->descripcion ?? 'N/A' }}</p>
                    <p><strong>Precio:</strong> {{ $producto->precio }}</p>
                    <p><strong>Stock:</strong> {{ $producto->stock }}</p>

                    <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning">Editar</a>
                    <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
