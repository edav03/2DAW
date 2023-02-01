<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UsuariosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() //Accion a realizar sobre la base de datos en el modelo que elijas
    {
        $login = $this->faker->unique()->word();

        return [
            'id' => $this->faker->unique()->randomNumber(),
            'name' => $this->faker->name,
            'login' => $login,
            'password' => bcrypt($login), // password
            'created_at' =>  null,
            'updated_at' => null 
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
