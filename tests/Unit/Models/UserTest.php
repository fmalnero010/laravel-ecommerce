<?php

declare(strict_types=1);

use Database\Factories\UserFactory;

test('to array', function (): void {
    $user = UserFactory::new()
        ->createOne()
        ->refresh();

    expect(array_keys($user->toArray()))
        ->toBe([
            'id',
            'name',
            'email',
            'email_verified_at',
            'created_at',
            'updated_at',
        ]);
});
