<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => mt_rand(1,6),
            'slug' => $this->faker->slug,
            'title' => $this->faker->sentence(mt_rand(4,11)),
            'excerpt' => $this->faker->paragraph(mt_rand(5, 10)),
            'image' => $this->faker->imageUrl(640, 480, 'sports', true),
            'body' => collect($this->faker->paragraphs(mt_rand(10, 25)))
                                ->map(fn($p) => "<p>$p</p>")
                                ->implode(''),
        ];
    }
}
