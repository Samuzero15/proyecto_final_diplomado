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
        Categoria::create([
            'nombre' => $request->input('nombre'),
            'mostrar' => $request->input('mostrar') == 'verdadero' ? true : false
        ]);

        return redirect()->route('categorias.index')
                         ->with('mensaje','Categoria creada exitosamente.');
    }

    public function show(Categoria $categoria)
    {
        return view('admin.categorias.mostrar', compact('categoria'));
    }

    public function edit(Categoria $categoria)
    {
        return view('admin.categorias.editar', compact('categoria'));
    }


    public function update(UpdateCategoriaRequest $request, Categoria $categoria)
    {

        $categoria->nombre = $request->input('nombre');
        $categoria->mostrar = $request->input('mostrar')  == 'verdadero' ? true : false;
        $categoria->save();

        return redirect()->route('categorias.index')->with('mensaje','Categoria actualizada exitosamente');
    }


    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return redirect()->route('categorias.index')->with('mensaje','Categoria eliminada exitosamente');
    }
}
