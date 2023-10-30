<?php

namespace App\Models;

enum PaymentFrequency: string
{
    case Hourly = 'hourly';
    case Daily = 'daily';
    case Weekly = 'weekly';
    case Yearly = 'yearly';

    /**
     * @return array<string>
     */
    public static function values(): array
    {
        return collect(self::cases())->map(fn (PaymentFrequency $case) => $case->value)->all();
    }
}
