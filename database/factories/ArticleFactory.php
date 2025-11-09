<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = Faker::create('id_ID');

        return [
            'category_id' => Category::inRandomOrder()->first()->id,
            'title' => $faker->sentence(4),
            'content' => $faker->paragraphs(2, true),
            'author_id' => Author::inRandomOrder()->first()->id,
            'image' => $faker->imageUrl(400, 180, 'articles', true),
        ];
    }
}
