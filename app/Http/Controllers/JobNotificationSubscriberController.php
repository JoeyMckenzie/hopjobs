<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\JobNotificationSubscriber;
use Illuminate\Http\Request;

final class JobNotificationSubscriberController extends Controller
{
    public function __invoke(Request $request): void
    {
        $request->validate([
            'email' => 'required|string|lowercase|email|max:255',
        ]);

        JobNotificationSubscriber::createOrFirst([
            'email' => $request->email,
        ]);

        session()->flash('message', 'subscribed');
    }
}
