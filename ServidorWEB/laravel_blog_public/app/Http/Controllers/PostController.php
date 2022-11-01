<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;



class PostController extends Controller
{
    //
    public function index() {

        //echo "hola";
        $posts = Post::all();

        return view('blog')->with("posts",$posts);
    }
}
