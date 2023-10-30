<?php

namespace Database\Factories;

use App\Models\JobListingResponsibility;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<JobListingResponsibility>
 */
class JobListingResponsibilityFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'responsibility' => fake()->sentence(),
        ];
    }
}
