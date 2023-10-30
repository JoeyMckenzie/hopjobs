<?php

namespace App\Models;

enum UserType: string
{
    case Admin = 'admin';
    case JobSeeker = 'job_seeker';
    case JobPoster = 'job_poster';

    /**
     * @return array<string>
     */
    public static function values(): array
    {
        return collect(self::cases())->map(fn (UserType $case) => $case->value)->all();
    }
}
