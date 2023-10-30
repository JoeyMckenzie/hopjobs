<?php

namespace App\Models;

enum JobType: string
{
    case FullTime = 'full_time';
    case PartTime = 'part_time';

    /**
     * @return array<string>
     */
    public static function values(): array
    {
        return collect(self::cases())->map(fn (JobType $case) => $case->value)->all();
    }
}
