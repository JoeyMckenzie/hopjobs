<?php

declare(strict_types=1);

namespace App\Enums;

enum ListingType: string
{
    case ON_SITE = 'on_site';

    case HYBRID = 'hybrid';

    case REMOTE = 'remote';

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
