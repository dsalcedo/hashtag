<?php

namespace App\Models\Catalogo;

use Illuminate\Database\Eloquent\Model;

class CatalogoCiudades extends Model
{
    protected $table = 'cities';
    protected $fillable = [
        'name',
        'country_code',
        'district',
        'population'
    ];
}
