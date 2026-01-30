@extends('layouts.app')

@section('content')
<div class="container">
	<div class="d-flex justify-content-between align-items-center mb-3">
		<h1>Entradas de Inventario</h1>
		<a href="{{ route('inventario.index') }}" class="btn btn-secondary">Volver</a>
	</div>

	<div class="alert alert-info">
		<p>Registra aquí las entradas de inventario.</p>
	</div>

	<div class="card">
		<div class="card-body">
			<p>Módulo de Entradas - En desarrollo</p>
		</div>
	</div>
</div>
@endsection
