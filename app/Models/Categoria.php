<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * Get all of the comments for the Categoria
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productos(): HasMany
    {
        return $this->hasMany(Producto::class, 'id_producto');
    }
    /**
     * El protected $fillable nos permite indicarle a Laravel
     * cuales son los campos que se le permitirá almacenar en la Tabla
     * correspondiente en la base de datos
     * @var array
     */
    protected $fillable = [
        'nombre', 'mostrar'
    ];

    /**
     * El protected $guarded nos permite indicarle a Laravel
     * cuales son los campos que se protegerá y no se almacenrá
     * en la Tabla correspondiente en la base de datos
     * @var array
     */
    protected $guarded = [

    ];

}
