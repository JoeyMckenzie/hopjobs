<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\JobListing;
use Inertia\Inertia;
use Inertia\Response;

final class JobListingController extends Controller
{
    public function show(): Response
    {
        return Inertia::render('Dashboard', [
            'listing' => JobListing::all(),
        ]);
    }
}
