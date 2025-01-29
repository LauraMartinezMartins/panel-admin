<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Empresa extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'id',
        'nombre',
        'cif_nif',
        'telefono',
        'direccion',
        'codigo_postal',
        'pais',
    ];

    /**
     * Get all of the users for the Empresa
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
