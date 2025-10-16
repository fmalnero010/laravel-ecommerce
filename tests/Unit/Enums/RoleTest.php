<?php

declare(strict_types=1);

use Src\Authorization\Domain\Enums\Role;

describe('Roles Enum', function (): void {
    test('has label Administrator for that role', function (): void {
        $administratorLabel = Role::Administrator->label();

        expect($administratorLabel)
            ->toBe('Administrator');
    });

    test('has label Customer for that role', function (): void {
        $customerLabel = Role::Customer->label();

        expect($customerLabel)
            ->toBe('Customer');
    });
});
