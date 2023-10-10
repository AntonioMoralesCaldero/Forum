<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=>\App\Models\User::all()->random()->id, //Ve a la carpeta User en Models y coge de manera aleatoria el id de todos los usuarios
            'forum_id' => \App\Models\Forum::all()->random()->id,
            'title'=> fake().setence(),
            'description'=>fake().paragraph(),
        ];
    }
}
