<?php

namespace App\Http\Controllers\Jobs;

use App\Http\Controllers\Controller;
use App\Models\JobListing;
use Inertia\Inertia;
use Inertia\Response;

class ListingsController extends Controller
{
    public function show(): Response
    {
        return Inertia::render('Home', [
            'listings' => JobListing::select(['id', 'title', 'created_at', 'pay', 'payment_frequency', 'job_type'])->get(),
        ]);
    }
}
