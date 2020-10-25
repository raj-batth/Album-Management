<?php

namespace Database\Factories;

use App\Models\Photographer;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhotographerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Photographer::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'phone_number' => $this->faker->unique()->randomElement(['111-111-1111', '222-222-2222', '333-333-3333', '444-444-4444', '555-555-5555']),
            'email' => $this->faker->unique()->safeEmail,
            'bio' => $this->faker->paragraph(1),
            'profile_picture' => $this->faker->unique()->randomElement(['profile1.jpg', 'profile2.jpg', 'profile3.jpg', 'profile4.jpg', 'profile5.jpg']),

        ];
    }
}
