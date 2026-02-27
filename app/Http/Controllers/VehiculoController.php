<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use App\Models\Propietario;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehiculos = Vehiculo::with('propietario')->get();
        return view('vehiculos.index', compact('vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $propietarios = Propietario::all();
        return view('vehiculos.create', compact('propietarios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'anio' => 'required|integer',
            'color' => 'required|string|max:255',
            'placa' => 'required|string|unique:vehiculos',
            'numero_serie' => 'required|string|unique:vehiculos',
            'tipo_combustible' => 'required|string|max:255',
            'propietario_id' => 'required|exists:propietario,id',
        ]);

        Vehiculo::create($validated);
        return redirect()->route('vehiculos.index')->with('success', 'Vehículo creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehiculo $vehiculo)
    {
        return view('vehiculos.show', compact('vehiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehiculo $vehiculo)
    {
        $propietarios = Propietario::all();
        return view('vehiculos.edit', compact('vehiculo', 'propietarios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehiculo $vehiculo)
    {
        $validated = $request->validate([
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'anio' => 'required|integer',
            'color' => 'required|string|max:255',
            'placa' => 'required|string|unique:vehiculos,placa,' . $vehiculo->id,
            'numero_serie' => 'required|string|unique:vehiculos,numero_serie,' . $vehiculo->id,
            'tipo_combustible' => 'required|string|max:255',
            'propietario_id' => 'required|exists:propietario,id',
        ]);

        $vehiculo->update($validated);
        return redirect()->route('vehiculos.show', $vehiculo)->with('success', 'Vehículo actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehiculo $vehiculo)
    {
        $vehiculo->delete();
        return redirect()->route('vehiculos.index')->with('success', 'Vehículo eliminado correctamente');
    }
}
