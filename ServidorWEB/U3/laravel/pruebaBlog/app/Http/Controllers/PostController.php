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
        $posts = Post::orderBy('titulo')->paginate(5);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
        Post::findOrFail($id)->delete();
        $posts = Post::orderBy('titulo')->paginate(5);
        return view('posts.index', compact('posts'));
    }

    public function nuevoPrueba()
    {
        $x = rand(0, 9999);
        $newPost = new Post();
        $newPost->titulo = "Titulo $x";
        $newPost->contenido = "Contenido $x";
        $newPost->save();

        $posts = Post::orderBy('titulo')->paginate(5);
        return view('posts.index', compact('posts'));
    }

    public function editarPrueba($id){
        $modPost = Post::findOrFail($id);
        $modPost->titulo = "Titulo modificado";
        $modPost->contenido = "Contenido modificado";
        $modPost->save();

        $posts = Post::orderBy('titulo')->paginate(5);
        return view('posts.index', compact('posts'));
    }
}
