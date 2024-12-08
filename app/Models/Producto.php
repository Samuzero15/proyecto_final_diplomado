<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    /**
     * Get the categoria that owns the Producto
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }

    /**
     * Get all of the carritos for the Producto
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carritos(): HasMany
    {
        return $this->hasMany(Carrito::class, 'id');
    }

    /**
     * Get all of the pagos for the Producto
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pagos(): HasMany
    {
        return $this->hasMany(Pagos::class, 'id_producto');
    }

    /**
     * Get all of the facturas for the Producto
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facturas(): HasMany
    {
        return $this->hasMany(Factura::class, 'id_producto');
    }
}
