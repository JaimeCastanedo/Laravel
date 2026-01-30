@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalles del Empleado</div>

                <div class="card-body">
                    <p><strong>Nombre:</strong> {{ $empleado->nombre }}</p>
                    <p><strong>Email:</strong> {{ $empleado->email }}</p>
                    <p><strong>Puesto:</strong> {{ $empleado->puesto ?? 'N/A' }}</p>

                    <a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-warning">Editar</a>
                    <a href="{{ route('empleados.index') }}" class="btn btn-secondary">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
