<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Http\Requests\StoreCategoriaRequest;
use App\Http\Requests\UpdateCategoriaRequest;
use App\Http\Requests\CategorySearchRequest;
use PDF;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CategorySearchRequest $request)
    {
        $query = Categoria::query();

        if ($request->has('search') && $request->search != '') {
            $query->where('nombre', 'LIKE', '%' . $request->search . '%');
        }

        $categorias = $query->paginate(10);

        return view('admin.categorias.index', compact('categorias'));
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
            'ocultar' => $validated['ocultar']
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
            'ocultar' => $validated['ocultar'],  
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

    public function generarReporte()
    {
        $categorias = Categoria::orderBy('id', 'desc')->get(); // Obtener todos los productos con sus categorías
        $pdf = PDF::loadView('admin.categorias.reporte', compact('categorias')); // Cargar la vista del reporte
        return $pdf->download('reporte_categorias.pdf'); // Descargar el PDF
    }
}
