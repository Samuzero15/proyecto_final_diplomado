<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
     /** @use HasFactory<\Database\Factories\CategoriaFactory> */
     use HasFactory;
     use SoftDeletes; //Indica la utilizacion de la funcionalidad de soft deletes
                      // o lo que es lo mismo, borrado logico.

     /**
      * El protected $fillable nos permite indicarle a Laravel
      * cuales son los campos que se le permitirá almacenar en la Tabla
      * correspondiente en la base de datos
      * @var array
      */
     protected $fillable = [
         'descripcion', 'cantidad', 'precio', 'existencia'
     ];
}
