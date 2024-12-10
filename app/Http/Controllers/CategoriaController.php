<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Http\Requests\StoreCategoriaRequest;
use App\Http\Requests\UpdateCategoriaRequest;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::orderBy('id', 'desc')->paginate(15);
        return view('admin.categorias.index', compact('categorias'));

        //$categorias = Categoria::all();
        //return view('admin.categorias.index', ['categorias' => $categorias]);
    }


    public function create()
    {
        return view('admin.categorias.crear');
    }

    public function store(StoreCategoriaRequest $request)
    {
        // Obtener los datos validados
        $validated = $request->validated();

        // Crear la categoría, con 'ocultar' convertido a booleano
        Categoria::create([
            'nombre' => $validated['nombre'],
            'ocultar' => $validated['mostrar']
        ]);

        return redirect()->route('categorias.index')
                         ->with('mensaje', 'Categoría creada exitosamente.');
    }


    public function show(Categoria $categoria)
    {
        return view('admin.categorias.mostrar', compact('categoria'));
    }

    public function edit(Categoria $categoria)
    {
        return view('admin.categorias.editar', compact('categoria'));
    }


    public function update(UpdateCategoriaRequest $request, $id)
    {
        $categoria = Categoria::findOrFail($id);

        $validated = $request->validated();

        $categoria->update([
            'nombre' => $validated['nombre'],
            'ocultar' => $validated['mostrar'],  
        ]);

        // Redirigir de vuelta con mensaje de éxito
        return redirect()->route('categorias.index')
                         ->with('mensaje', 'Categoría actualizada exitosamente.');
    }


    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return redirect()->route('categorias.index')->with('mensaje','Categoria eliminada exitosamente');
    }
}
