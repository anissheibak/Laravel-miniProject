<?php

namespace Database\Factories;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user=User::pluck('id');
        return [
            'user_id'=> $this->faker->randomElement($user),
            'title' => $this->faker->text(),
            'started_at' => Carbon::now()->format('Y-m-d H:i:s')
        ];
    }
}
