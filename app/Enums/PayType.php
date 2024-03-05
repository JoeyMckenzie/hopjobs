<?php

declare(strict_types=1);

namespace App\Enums;

enum PayType: string
{
    case HOURLY = 'hourly';

    case SALARY = 'salary';

    /**
     * @return string[]
     */
    public static function toArray(): array
    {
        /** @var string[] $types */
        $types = collect(self::cases())
            ->map(fn (PayType $type) => $type->value)
            ->toArray();

        return $types;
    }
}
