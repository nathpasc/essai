<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        return [
            'title' =>fake() ->bs(),
            'body'=>fake() ->paragraph(5),
            'published_at'=> fake()->dateTimeBetween('-1 year','+2 months'),
            'user_id'=> User::get()->first()->id,
        ];
    }
}
