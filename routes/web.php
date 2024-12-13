<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PageController;
// Ruta para la página "Acerca de"
Route::get('/about', [PageController::class, 'about'])->name('web.pages.about');

// Ruta para la página "Hombres"
Route::get('/mens', [PageController::class, 'mens'])->name('web.pages.mens');

// Ruta para la página "Mujeres"
Route::get('/womens', [PageController::class, 'womens'])->name('web.pages.womens');

// Ruta para la página "Contacto"
Route::get('/contact', [PageController::class, 'contact'])->name('web.pages.contact');

// Ruta para la página "Íconos"
Route::get('/icons', [PageController::class, 'icons'])->name('web.pages.icons');

// Ruta para la página "Tipografía"
Route::get('/typography', [PageController::class, 'typography'])->name('web.pages.typography');

// Ruta para la página "Single"
Route::get('/single', [PageController::class, 'single'])->name('web.pages.single');

Route::get('/', function () {
    return view('web.index'); 
})->name('home');  

//Ruta para administrador
Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('/admin/categorias',CategoriaController::class)->names('categorias');
Route::resource('/admin/productos',ProductoController::class)->names('productos');
Route::get('/productos/reporte', [ProductoController::class, 'generarReporte'])->name('productos.reporte');
Route::get('/categorias/reporte', [CategoriaController::class, 'generarReporte'])->name('categoria.reporte');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
