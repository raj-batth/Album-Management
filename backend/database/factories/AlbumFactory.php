<?php

namespace Database\Factories;

use App\Models\Album;
use App\Models\Photographer;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlbumFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Album::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'photographer_id' => Photographer::all()->random()->id,
            'title' => $this->faker->sentence(2, true),
            'description' => $this->faker->paragraph(1),
            'img' => $this->faker->randomElement(['landscape1.jpg', 'landscape2.jpg', 'landscape3.jpg', 'landscape4.jpg', 'landscape5.jpg']),
            'featured' => $this->faker->randomElement([0, 1]),
        ];
    }
}
