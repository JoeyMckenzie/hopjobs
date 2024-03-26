<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\JobNotificationSubscriber;
use App\Models\User;
use Illuminate\Http\Request;

final class JobNotificationSubscriberController extends Controller
{
    public function __invoke(Request $request): void
    {

        $request->validate([
            'email' => 'required|string|lowercase|email|max:255|unique:'.User::class,
        ]);

        JobNotificationSubscriber::create([
            'email' => $request->email,
        ]);

        session()->flash('message', 'User successfully subscribed.');
    }
}
