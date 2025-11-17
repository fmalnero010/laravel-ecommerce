<?php

declare(strict_types=1);

use Src\Shared\Domain\Enums\Currency;

describe('Currency Enum', function (): void {
    test('has dollar label', function (): void {
        $dollarLabel = Currency::Usd->label();

        expect($dollarLabel)
            ->toBe('US$');
    });

    test('has pesos label', function (): void {
        $dollarLabel = Currency::Ars->label();

        expect($dollarLabel)
            ->toBe('$');
    });
});
