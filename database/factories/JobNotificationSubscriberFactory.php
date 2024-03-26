<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\JobNotificationSubscriber;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<JobNotificationSubscriber>
 */
final class JobNotificationSubscriberFactory extends Factory
{
    protected $model = JobNotificationSubscriber::class;

    public function definition(): array
    {
        return [
            'email' => fake()->email(),
            'email_verified_at' => fake()->randomElement([now(), null]),
        ];
    }
}
