<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

final class JobListingBookmarkController extends Controller
{
    public function __invoke(Request $request): void
    {
        $userId = $request->user();
        Log::info('logged for user');

        session('bookmarked');
    }
}
