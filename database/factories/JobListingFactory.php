<?php

namespace Database\Factories;

use App\Models\JobListing;
use App\Models\JobType;
use App\Models\PaymentFrequency;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Lottery;

/**
 * @extends Factory<JobListing>
 */
class JobListingFactory extends Factory
{
    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $payValue = fake()->randomFloat(max: 100_000);
        $pay = Lottery::odds(1, 5)
            ->winner(fn () => $payValue)
            ->loser(fn () => null)
            ->choose();

        $frequency = null;

        if (isset($pay)) {
            $frequency = $payValue <= 100 ? PaymentFrequency::Hourly : PaymentFrequency::Yearly;
        }

        return [
            'title' => fake()->jobTitle(),
            'description' => implode(fake()->sentences()),
            'pay' => $pay,
            'payment_frequency' => $frequency,
            'primary_contact' => fake()->safeEmail(),
            'application_link' => fake()->url(),
            'job_type' => fake()->randomElement(JobType::values()),
        ];
    }
}
