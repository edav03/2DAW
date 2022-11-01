<?php

use Illuminate\Database\Seeder;
use App\Models\Usuario;
use App\Models\Post;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarios = Usuario::all();
        $usuarios->each(function($usuario) {
            factory(Post::class, 3)->create([
                'usuario_id' => $usuario->id
            ]);
        });
    }
}
