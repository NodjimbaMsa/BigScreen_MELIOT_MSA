<?php

namespace Database\Factories;
use App\Models\Response;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ResponseFactory extends Factory
{
    protected $model = Response::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'response_text' => $this->faker->word,
            'question_id'=>\App\Models\Question::factory(),
        ];
       
    }
}
