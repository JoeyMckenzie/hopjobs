<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\JobListing;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Inertia\Response;

final class HomeController
{
    public function __invoke(): Response
    {
        $listings = JobListing::openStatus()
            ->limit(5)
            ->get([
                'title',
                'listing_url',
                'company',
                'company_logo',
                'description',
                'listing_type',
                'pay_start',
                'pay_end',
                'pay_type'
            ]);

        return Inertia::render('Index', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
            'listings' => $listings,
        ]);
    }
}
