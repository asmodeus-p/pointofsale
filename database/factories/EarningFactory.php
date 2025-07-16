<?php

namespace Database\Factories;

use App\Models\Earning;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Earning>
 */
class EarningFactory extends Factory
{

    protected $model = Earning::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'amount' => $this->faker->randomFloat(2, 100, 10000),
            'source' => $this->faker->sentence(3),
            'user_id' => User::factory(),
            'created_at' => $this->faker->dateTimeThisMonth(),
        ];
    }
}
