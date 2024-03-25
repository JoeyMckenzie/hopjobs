<?php

declare(strict_types=1);

namespace App\Enums;

enum ListingType: string
{
    case FULL_TIME = 'full_time';

    case PART_TIME = 'part_time';


    /**
     * @return string[]
     */
    public static function toArray(): array
    {
        /** @var string[] $types */
        $types = collect(self::cases())
            ->map(fn (ListingType $type) => $type->value)
            ->toArray();

        return $types;
    }
}
