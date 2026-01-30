@extends('layouts.app')

@section('content')
<div class="container">
	<div class="d-flex justify-content-between align-items-center mb-3">
		<div>
			<h1>Productos</h1>
			<p style="color: #7f8c8d; margin: 5px 0;">Administra tu catálogo de productos</p>
		</div>
		<a href="{{ route('productos.create') }}" class="btn btn-primary">+ Nuevo Producto</a>
	</div>

	@if(session('success'))
		<div class="alert alert-success">✓ {{ session('success') }}</div>
	@endif

	@if(isset($productos) && $productos->count())
		<div class="card">
			<div class="card-body">
				<table class="table">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre</th>
							<th>Descripción</th>
							<th>Precio</th>
							<th>Stock</th>
							<th style="width: 220px;">Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($productos as $producto)
						<tr>
							<td><strong>#{{ $producto->id }}</strong></td>
							<td><strong>{{ $producto->nombre }}</strong></td>
							<td>{{ substr($producto->descripcion ?? 'N/A', 0, 50) }}...</td>
							<td><strong>${{ number_format($producto->precio, 2) }}</strong></td>
							<td>
								@if($producto->stock > 10)
									<span class="status-badge status-active">{{ $producto->stock }} unid.</span>
								@elseif($producto->stock > 0)
									<span class="status-badge" style="background-color: #fff3cd; color: #856404;">{{ $producto->stock }} unid.</span>
								@else
									<span class="status-badge status-inactive">Agotado</span>
								@endif
							</td>
							<td>
								<a href="{{ route('productos.show', $producto->id) }}" class="btn btn-sm btn-info">Ver</a>
								<a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-sm btn-warning">Editar</a>
								<form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display:inline-block" onsubmit="return confirm('¿Eliminar producto?')">
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
				<p style="font-size: 1.1rem; color: #7f8c8d;">No hay productos registrados.</p>
				<a href="{{ route('productos.create') }}" class="btn btn-primary mt-3">Crear primer producto</a>
			</div>
		</div>
	@endif
</div>
@endsection
