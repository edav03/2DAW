<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['titulo', 'contenido'];

    public function usuario()
    {
        return $this->belongsTo('App\Models\Usuario');
    }

    public function comentarios()
    {
        return $this->hasMany('App\Models\Comentario');
    }
}
