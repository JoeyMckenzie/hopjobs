<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobListingRequest;
use App\Models\JobListing;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Cache;
use Inertia\Inertia;
use Inertia\Response;

final class JobListingController extends Controller
{
    private const string CACHE_KEY = 'job_listings';

    public function store(StoreJobListingRequest $request): Response
    {
        return Inertia::render('Dashboard');
    }

    public function show(int $id): Response
    {
        $job = JobListing::openStatus()->find($id, ['title', 'description', 'url']);

        if (is_null($job)) {
            abort(404);
        }

        return Inertia::render('Dashboard');
    }

    public function index(): Response
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
