<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Usuarios;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = post::with('usuarios')->orderBy('titulo')->paginate(5);
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
        $Newpost = new Post();
        $Newpost->id = rand();
        $Newpost->titulo = $request->get('titulo');
        $Newpost->user_id = $request->get('userID');
        $Newpost->contenido_post = $request->get('contenido');
        $Newpost->created_at = null;
        $Newpost->updated_at = null;
        $Newpost->save();

        return redirect()->route('posts.index');
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
        $data = post::with('usuarios')->findOrFail($id);
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
        $data = post::orderBy('titulo')->paginate(5);
        return view('posts.listado', compact('data'));
    }

    

    public function createPost() // Crea nuevos posts y los añade a la DB
    {
        $users = Usuarios::get()->first();
        return view('posts.create', compact('users'));
    }

    public function editarPrueba($id){ // Edita los posts y los guarda en la DB
        $x = rand(0, 1000);
        $c = rand(0, 1000);

        $modifiacion = post::findOrFail($id);
        $modifiacion->titulo = "Titulo ${x}";
        $modifiacion->contenido_post = "Contenido ${c}";
        $modifiacion->save();

        $data = post::with('usuarios')->orderBy('titulo')->paginate(5);
        return view('posts.listado', compact('data'));
    }
   
}
