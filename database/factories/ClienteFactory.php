<?php

namespace Database\Factories;

use Faker\Provider\bg_BG\PhoneNumber;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' =>fake()->firstName(),
            'ddd' => '11',
            'celular' => fake()->PhoneNumber(),
            'email' => fake()->email(),
            'observacoes' => fake()->paragraph(),
        ];
    }
}
