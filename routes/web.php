<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/clientes', [App\Http\Controllers\ClientesController::class, 'index'])->name('clientes.index');
Route::get('/clientes/create', [App\Http\Controllers\ClientesController::class, 'create'])->name('clientes.create');
Route::post('/clientes', [App\Http\Controllers\ClientesController::class, 'store'])->name('clientes.store');
Route::get('/clientes/{cliente}', [App\Http\Controllers\ClientesController::class, 'show'])->name('clientes.show');
Route::get('/clientes/{cliente}/edit', [App\Http\Controllers\ClientesController::class, 'edit'])->name('clientes.edit');
Route::put('/clientes/{cliente}', [App\Http\Controllers\ClientesController::class, 'update'])->name('clientes.update');
Route::delete('/clientes/{cliente}', [App\Http\Controllers\ClientesController::class, 'destroy'])->name('clientes.destroy');

// Rutas para Productos (paralelas a Clientes)
Route::get('/productos', [App\Http\Controllers\ProductosController::class, 'index'])->name('productos.index');
Route::get('/productos/create', [App\Http\Controllers\ProductosController::class, 'create'])->name('productos.create');
Route::post('/productos', [App\Http\Controllers\ProductosController::class, 'store'])->name('productos.store');
Route::get('/productos/{producto}', [App\Http\Controllers\ProductosController::class, 'show'])->name('productos.show');
Route::get('/productos/{producto}/edit', [App\Http\Controllers\ProductosController::class, 'edit'])->name('productos.edit');
Route::put('/productos/{producto}', [App\Http\Controllers\ProductosController::class, 'update'])->name('productos.update');
Route::delete('/productos/{producto}', [App\Http\Controllers\ProductosController::class, 'destroy'])->name('productos.destroy');

// Rutas para Empleados
Route::get('/empleados', [App\Http\Controllers\EmpleadosController::class, 'index'])->name('empleados.index');
Route::get('/empleados/create', [App\Http\Controllers\EmpleadosController::class, 'create'])->name('empleados.create');
Route::post('/empleados', [App\Http\Controllers\EmpleadosController::class, 'store'])->name('empleados.store');
Route::get('/empleados/{empleado}', [App\Http\Controllers\EmpleadosController::class, 'show'])->name('empleados.show');
Route::get('/empleados/{empleado}/edit', [App\Http\Controllers\EmpleadosController::class, 'edit'])->name('empleados.edit');
Route::put('/empleados/{empleado}', [App\Http\Controllers\EmpleadosController::class, 'update'])->name('empleados.update');
Route::delete('/empleados/{empleado}', [App\Http\Controllers\EmpleadosController::class, 'destroy'])->name('empleados.destroy');

// Rutas para Inventario
Route::get('/inventario', [App\Http\Controllers\InventarioController::class, 'index'])->name('inventario.index');
Route::get('/inventario/create', [App\Http\Controllers\InventarioController::class, 'create'])->name('inventario.create');
Route::post('/inventario', [App\Http\Controllers\InventarioController::class, 'store'])->name('inventario.store');
Route::get('/inventario/{inventario}', [App\Http\Controllers\InventarioController::class, 'show'])->name('inventario.show');
Route::get('/inventario/{inventario}/edit', [App\Http\Controllers\InventarioController::class, 'edit'])->name('inventario.edit');
Route::put('/inventario/{inventario}', [App\Http\Controllers\InventarioController::class, 'update'])->name('inventario.update');
Route::delete('/inventario/{inventario}', [App\Http\Controllers\InventarioController::class, 'destroy'])->name('inventario.destroy');
Route::get('/inventario/movimientos/entradas', [App\Http\Controllers\InventarioController::class, 'entradas'])->name('inventario.entradas');
Route::get('/inventario/movimientos/salidas', [App\Http\Controllers\InventarioController::class, 'salidas'])->name('inventario.salidas');