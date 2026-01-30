<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function index()
    {
        $items = Inventario::all();
        return view('Inventario.index', compact('items'));
    }

    public function create()
    {
        return view('Inventario.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'item' => 'required|string|max:255',
            'cantidad' => 'required|integer|min:0',
            'ubicacion' => 'nullable|string|max:255',
        ]);

        Inventario::create($request->only(['item','cantidad','ubicacion']));

        return redirect()->route('inventario.index')->with('success', 'Ítem agregado al inventario.');
    }

    public function show(Inventario $inventario)
    {
        return view('Inventario.show', ['item' => $inventario]);
    }

    public function edit(Inventario $inventario)
    {
        return view('Inventario.edit', ['item' => $inventario]);
    }

    public function update(Request $request, Inventario $inventario)
    {
        $request->validate([
            'item' => 'required|string|max:255',
            'cantidad' => 'required|integer|min:0',
            'ubicacion' => 'nullable|string|max:255',
        ]);

        $inventario->update($request->only(['item','cantidad','ubicacion']));

        return redirect()->route('inventario.index')->with('success', 'Ítem actualizado en el inventario.');
    }

    public function destroy(Inventario $inventario)
    {
        $inventario->delete();
        return redirect()->route('inventario.index')->with('success', 'Ítem eliminado del inventario.');
    }

    public function entradas()
    {
        return view('Inventario.entradas');
    }

    public function salidas()
    {
        return view('Inventario.salidas');
    }
}
