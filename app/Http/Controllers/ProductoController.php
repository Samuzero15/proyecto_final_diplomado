<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the products.
     */
    public function index()
    {
        // $products = Product::with('categorias')->get();
        $productos = Producto::orderBy('id', 'desc')->paginate(15);
        return view('admin.productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new product.
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('admin.productos.crear', compact('categorias'));
    }

    /**
     * Store a newly created product in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $producto = Producto::create($request->validated());
        return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente.');
    }

    /**
     * Display the specified product.
     */
    public function show(Producto $producto)
    {
        return view('admin.productos.mostrar', compact('producto'));
    }

    /**
     * Show the form for editing the specified product.
     */
    public function edit(Producto $producto)
    {
        $categorias = Categoria::all();
        return view('admin.productos.editar', compact('producto', 'categorias'));
    }

    /**
     * Update the specified product in storage.
     */
    public function update(UpdateProductRequest $request, Producto $producto)
    {
        $producto->update($request->validated());
        return redirect()->route('productos.index')->with('success', 'Producto actualizado exitosamente.');
    }

    /**
     * Remove the specified product from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index')->with('success', 'Producto eliminado exitosamente.');
    }
}