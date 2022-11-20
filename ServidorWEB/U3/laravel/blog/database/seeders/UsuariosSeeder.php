<?php

namespace Database\Seeders;

use App\Models\Usuarios;
use Database\Factories\UsuariosFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() //Factoria a ejecutar
    {
        Usuarios::Factory()->count(30)->create();
    }
}
