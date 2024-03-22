<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\JobListing;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

final class HomeController
{
    public function __invoke()
    {
        return Inertia::render('Index', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
            'listings' => JobListing::openStatus()->get(),
        ]);
    }
}
