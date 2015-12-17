<?php

namespace App\Models\Catalogo;

use Illuminate\Database\Eloquent\Model;

class CatalogoPaises extends Model
{
    protected $table = 'countries';
    protected $fillable = [
        'code',
        'name',
        'continent',
        'region',
        'pupulation',
        'local_name',
        'capital',
        'code2'
    ];

}
