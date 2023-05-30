<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
// use League\CommonMark\Node\Block\Paragraph;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>rtrim(fake()->sentence(random_int(5,10)),'.'),
            'views_count'=> random_int(5,10),
            'body'=> fake()->paragraph(random_int(3,7),true),
            'votes_count' =>random_int(-10,10),
            'answers_count'=> random_int(0,10),

            
        ];
    }
}