<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = post::orderBy('titulo')->paginate(5);
        return view('posts.listado', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->route('inicio');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = post::findorFail($id);
        return view('posts.ficha', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return redirect()->route('inicio');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        post::findOrFail($id)->delete();
        $post = post::get();
        return view('libros.index', compact('post'));
    }

    public function nuevoPrueba()
    {
        $idTitle = rand();
        $idTitle += 1;
        $x = rand(0, 1000);
        $c = rand(0, 1000);

        $data = new Post();
        $data->id = strval($idTitle);
        $data->titulo = "Titulo ${x}";
        $data->contenido_post = "Contenido ${c}";
        $data->created_at = date("Y/m/d");
        $data->save();
    }

    public function editarPrueba($id){
        $x = rand(0, 1000);
        $c = rand(0, 1000);

        $modifiacion = post::findOrFail($id);
        $modifiacion->titulo = "Titulo ${x}";
        $modifiacion->contenido_post = "Contenido ${c}";
        $modifiacion->save();

        return "Modificacion -> Titulo ${x}";
    }
   
}
