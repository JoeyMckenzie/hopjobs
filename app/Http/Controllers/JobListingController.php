<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\JobListing;
use Cache;
use Illuminate\Database\Eloquent\Collection;
use Inertia\Inertia;
use Inertia\Response;

final class JobListingController extends Controller
{
    private const string CACHE_KEY = 'job_listings';

    public function show(): Response
    {
        if (Cache::has(self::CACHE_KEY)) {
            /** @var Collection<int, JobListing> $listings */
            $listings = Cache::get(self::CACHE_KEY);

            return Inertia::render('Dashboard', [
                'listing' => $listings,
            ]);
        }

        /** @var int $ttl */
        $ttl = config('hopjobs.ttl_minutes');
        $listings = JobListing::openStatus()
            ->orderBy('created_at')
            ->get();

        Cache::put(self::CACHE_KEY, $listings, now()->addMinutes($ttl));

        return Inertia::render('Dashboard', [
            'listing' => $listings,
        ]);
    }
}
