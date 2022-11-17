<?php

namespace Database\Seeders;

use App\Models\Usuarios;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarios = Usuarios::all();
        $usuarios->each(function($user){
            Post::Factory()->count(5)->create([
                'user_id'=>$user->id
            ]);
        });
    }
}
