<?php

namespace Database\Factories;

use App\Enums\PostType;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContentFactory extends Factory
{
   
    public function definition(): array
    {
        return [
            'title' => fake()->title(),
            'slug' => fake()->slug(),
            'cover_image' => fake()->image($dir="content"),
            'seo_title' => fake()->title(),
            'seo_description' => fake()->paragraph(),
            'type' => fake()->randomElement(PostType::NEWS->value,PostType::STORIES->value)
        ];
    }
}
