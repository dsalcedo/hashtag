<?php

namespace App\Models\Catalogo;

use Illuminate\Database\Eloquent\Model;

class CatalogoSexo extends Model
{
    protected $table = 'catalogo_sexo';
    protected $fillable = [
        'cve',
        'descripcion'
    ];
}
