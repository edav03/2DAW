<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    public function usuario()
    {
        return $this->belongsTo('App\Models\Usuario');
    }

    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }
}
