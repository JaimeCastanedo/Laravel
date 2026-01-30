@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalles del Ítem</div>

                <div class="card-body">
                    <p><strong>Item:</strong> {{ $item->item }}</p>
                    <p><strong>Cantidad:</strong> {{ $item->cantidad }}</p>
                    <p><strong>Ubicación:</strong> {{ $item->ubicacion ?? 'N/A' }}</p>

                    <a href="{{ route('inventario.edit', $item->id) }}" class="btn btn-warning">Editar</a>
                    <a href="{{ route('inventario.index') }}" class="btn btn-secondary">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
