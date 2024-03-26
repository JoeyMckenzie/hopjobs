<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\ListingStatus;
use App\Enums\ListingType;
use App\Enums\PayType;
use App\Models\JobListing;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<JobListing>
 */
final class JobListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->jobTitle(),
            'listing_url' => fake()->url(),
            'description' => fake()->paragraph(),
            'company' => fake()->company(),
            'company_logo' => fake()->imageUrl(),
            'company_website_url' => fake()->randomElement([null, fake()->url()]),
            'pay_start' => fake()->numberBetween(10, 100),
            'pay_end' => fake()->numberBetween(1000, 10000),
            'status' => fake()->randomElement(ListingStatus::toArray()),
            'pay_type' => fake()->randomElement(PayType::toArray()),
            'listing_type' => fake()->randomElement(ListingType::toArray()),
        ];
    }
}
