<?php

namespace Database\Factories;

use App\Models\Album;
use App\Models\Photo;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhotoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Photo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $photoArray = [
            'photo1.jpg', 'photo2.jpg', 'photo3.jpg', 'photo4.jpg', 'photo5.jpg', 'photo6.jpg', 'photo7.jpg', 'photo8.jpg', 'photo9.jpg', 'photo10.jpg',
            'photo11.jpg', 'photo12.jpg', 'photo13.jpg', 'photo14.jpg', 'photo15.jpg', 'photo16.jpg', 'photo17.jpg', 'photo18.jpg', 'photo19.jpg', 'photo20.jpg',
            'photo21.jpg', 'photo22.jpg', 'photo23.jpg', 'photo24.jpg', 'photo25.jpg', 'photo26.jpg', 'photo27.jpg', 'photo28.jpg', 'photo29.jpg', 'photo30.jpg',
            'photo31.jpg', 'photo32.jpg', 'photo33.jpg', 'photo34.jpg', 'photo35.jpg', 'photo36.jpg', 'photo37.jpg', 'photo38.jpg', 'photo39.jpg', 'photo40.jpg',
            'photo41.jpg', 'photo42.jpg', 'photo43.jpg', 'photo44.jpg', 'photo45.jpg', 'photo46.jpg', 'photo47.jpg', 'photo48.jpg', 'photo49.jpg', 'photo50.jpg',
        ];
        return [
            'album_id' => Album::all()->random()->id,
            'title' => $this->faker->sentence(2, true),
            'img' => $this->faker->unique()->randomElement($photoArray),
        ];
    }
}
