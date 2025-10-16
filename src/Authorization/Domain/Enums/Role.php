<?php

declare(strict_types=1);

namespace Src\Authorization\Domain\Enums;

enum Role: string
{
    case Administrator = 'administrator';
    case Customer = 'customer';

    public function label(): string
    {
        return match ($this) {
            self::Administrator => 'Administrator',
            self::Customer => 'Customer',
        };
    }
}
