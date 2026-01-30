@extends('layouts.app')

@section('content')
<div class="container">
	<div class="d-flex justify-content-between align-items-center mb-3">
		<div>
			<h1>Empleados</h1>
			<p style="color: #7f8c8d; margin: 5px 0;">Administra tu equipo de trabajo</p>
		</div>
		<a href="{{ route('empleados.create') }}" class="btn btn-primary">+ Nuevo Empleado</a>
	</div>

	@if(session('success'))
		<div class="alert alert-success">✓ {{ session('success') }}</div>
	@endif

	@if(isset($empleados) && $empleados->count())
		<div class="card">
			<div class="card-body">
				<table class="table">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Email</th>
							<th>Puesto</th>
							<th style="width: 240px;">Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($empleados as $empleado)
							<tr>
								<td><strong>#{{ $empleado->id }}</strong></td>
								<td><strong>{{ $empleado->nombre }}</strong></td>
								<td>{{ $empleado->email }}</td>
								<td><span class="status-badge status-active">{{ $empleado->puesto ?? 'Sin asignar' }}</span></td>
								<td>
									<a href="{{ route('empleados.show', $empleado->id) }}" class="btn btn-sm btn-info">Ver</a>
									<a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-sm btn-warning">Editar</a>
									<form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST" style="display:inline-block" onsubmit="return confirm('¿Eliminar empleado?')">
										@csrf
										@method('DELETE')
										<button class="btn btn-sm btn-danger">Eliminar</button>
									</form>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	@else
		<div class="card">
			<div class="card-body" style="text-align: center; padding: 50px;">
				<p style="font-size: 1.1rem; color: #7f8c8d;">No hay empleados registrados.</p>
				<a href="{{ route('empleados.create') }}" class="btn btn-primary mt-3">Registrar primer empleado</a>
			</div>
		</div>
	@endif
</div>
@endsection
