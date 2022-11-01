<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Usuario;
use App\Models\Comentario;

class ComentariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::all();
        $posts->each(function($post) {
            factory(Comentario::class, 3)->create([
                'post_id' => $post->id
            ]);
        });
    }
}
