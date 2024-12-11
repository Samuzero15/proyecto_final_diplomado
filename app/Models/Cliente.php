<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    /**
     * Get the carro associated with the Cliente
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function carro(): HasOne
    {
        return $this->hasOne(Carro::class, 'id');
    }

    /**
     * Get all of the pagos for the Producto
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pagos(): HasMany
    {
        return $this->hasMany(Pagos::class, 'id_cliente');
    }

    /**
     * Get all of the facturas for the Producto
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facturas(): HasMany
    {
        return $this->hasMany(Factura::class, 'id_cliente');
    }
}
