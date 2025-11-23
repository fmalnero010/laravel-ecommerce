<?php

declare(strict_types=1);

namespace Src\Products\Domain\Enums;

enum Currency: string
{
    case Usd = 'USD';
    case Ars = 'ARS';

    public function label(): string
    {
        return match ($this) {
            self::Usd => 'US$',
            self::Ars => '$',
        };
    }
}
