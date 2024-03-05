<?php

declare(strict_types=1);

namespace App\Enums;

enum ListingStatus: string
{
    case SUBMITTED = 'submitted';

    case DRAFT = 'draft';

    case CLOSED = 'closed';

    case OPEN = 'open';

    /**
     * @return string[]
     */
    public static function toArray(): array
    {
        /** @var string[] $statuses */
        $statuses = collect(self::cases())
            ->map(fn (ListingStatus $status) => $status->value)
            ->toArray();

        return $statuses;
    }
}
