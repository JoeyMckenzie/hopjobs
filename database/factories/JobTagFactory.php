<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\JobTag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<JobTag>
 */
final class JobTagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tag' => fake()->word(),
        ];
    }
}
