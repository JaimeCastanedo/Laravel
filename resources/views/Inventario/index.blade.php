@extends('layouts.app')

@section('content')
<div class="container">
	<div class="d-flex justify-content-between align-items-center mb-3">
		<h1>Inventario</h1>
		<a href="{{ route('inventario.create') }}" class="btn btn-primary">Nuevo Ítem</a>
	</div>

	@if(session('success'))
		<div class="alert alert-success">{{ session('success') }}</div>
	@endif

	@if(isset($items) && $items->count())
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Item</th>
					<th>Cantidad</th>
					<th>Ubicación</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($items as $item)
					<tr>
						<td>{{ $item->id }}</td>
						<td>{{ $item->item }}</td>
						<td>{{ $item->cantidad }}</td>
						<td>{{ $item->ubicacion ?? 'N/A' }}</td>
						<td>
							<a href="{{ route('inventario.show', $item->id) }}" class="btn btn-sm btn-info">Ver</a>
							<a href="{{ route('inventario.edit', $item->id) }}" class="btn btn-sm btn-warning">Editar</a>
							<form action="{{ route('inventario.destroy', $item->id) }}" method="POST" style="display:inline-block" onsubmit="return confirm('¿Eliminar ítem?')">
								@csrf
								@method('DELETE')
								<button class="btn btn-sm btn-danger">Eliminar</button>
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	@else
		<p>No hay ítems en el inventario.</p>
	@endif
</div>
@endsection
