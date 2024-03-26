<?php

declare(strict_types=1);

namespace App\Http\Controllers;

final class JobNotificationSubscriberController extends Controller
{
    public function __invoke(): void
    {
        // TODO: Implement __invoke() method.
        session()->flash('message', 'User successfully subscribed.');
    }
}
