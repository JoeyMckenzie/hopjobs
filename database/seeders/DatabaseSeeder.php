<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\JobListing;
use App\Models\JobNotificationSubscriber;
use App\Models\JobTag;
use App\Models\User;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

final class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        JobTag::factory(20)->create();
        JobListing::factory(20)->create();
        JobNotificationSubscriber::factory(10)->create();

        $tags = JobTag::all();
        $listings = JobListing::all();

        $listings->each(function (JobListing $listing) use ($tags) {
            $seededTags = $tags
                ->random(rand(1, count($tags)))->pluck('id')
                ->toArray();
            $listing->tags()->attach($seededTags);
        });
    }
}
