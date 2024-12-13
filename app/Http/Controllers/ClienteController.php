<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Http\Requests\StoreClienteRequest;
use App\Http\Requests\UpdateClienteRequest;
use PDF;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $clientes = Cliente::orderBy('id')->paginate(15);
        return view('admin.clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.clientes.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClienteRequest $request)
    {
        $validated = $request->validated();

        // Crear la categoría, con 'ocultar' convertido a booleano
        Cliente::create([
            'Nombres' => $validated['Nombres'],
            'Apellidos' => $validated['Apellidos'],
            'Correo' => $validated['Correo'],
            'Direccion' => $validated['Direccion'],
            'Contraseña' => $validated['Contraseña'],
        ]);

        return redirect()->route('clientes.index')
                         ->with('mensaje', 'Cliente creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        return view('admin.clientes.mostrar', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        return view('admin.clientes.editar', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClienteRequest $request, Cliente $cliente)
    {
        $cliente->update($request->validated());
        return redirect()->route('clientes.index')->with('mensaje', 'Cliente actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index')->with('mensaje', 'Cliente eliminado exitosamente.');
    }

    public function generarReporte()
    {
        $clientes = Cliente::all(); // Obtener todos los productos con sus categorías
        $pdf = PDF::loadView('admin.clientes.reporte', compact('clientes')); // Cargar la vista del reporte
        return $pdf->download('reporte_clientes.pdf'); // Descargar el PDF
    }
}
