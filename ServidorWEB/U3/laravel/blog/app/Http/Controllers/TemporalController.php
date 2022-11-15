<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class TemporalController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function nuevoPrueba(){
        $idTitle = uniqid(rand(), true);
        $x = rand(0);
        $c = rand(0);

        $data = new Post();
        $data->id = $idTitle;
        $data->titulo = "Titulo ${x}";
        $data->contenido_post = "Contenido ${c}";
    }
}
