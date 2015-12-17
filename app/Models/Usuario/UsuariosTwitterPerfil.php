<?php

namespace App\Models\Usuario;

use Illuminate\Database\Eloquent\Model;

class UsuariosTwitterPerfil extends Model
{
    protected $table = 'usuario_twitter_perfil';
    protected $fillable = [
        'usuario_id',
        'screen_name',
        'name',
        'descripcion',
        'favourites_count',
        'followers_count',
        'friends_count',
        'statuses_count',
        'profile_image_url_https',
        'protected',
        'verified',
        'default_profile_image',
        'utc_offset',
        'time_zone',
        'lang',
        'withheld_in_countries',
        'twitter_created_at',
    ];

    protected $hidden = ['created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usuarios()
    {
        return $this->hasMany('App\Models\Usuario\Usuarios');
    }
}
