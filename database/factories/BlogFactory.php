<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => mt_rand(1,6),
            'user_id' => mt_rand(4,10),
            'title' => $this->faker->sentence(mt_rand(3,10)),
            'read_time' => mt_rand(1,10).' menit',
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(mt_rand(4,7)),
            'body' => $this->faker->paragraph(mt_rand(10,35)),
        ];
    }
}
