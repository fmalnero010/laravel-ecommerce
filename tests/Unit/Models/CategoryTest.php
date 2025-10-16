<?php

declare(strict_types=1);

use Database\Factories\CategoryFactory;

test('to array', function (): void {
    $user = CategoryFactory::new()
        ->createOne()
        ->refresh();

    expect(array_keys($user->toArray()))
        ->toBe([
            'id',
            'name',
            'slug',
            'parent_id',
            'created_at',
            'updated_at',
            'deleted_at',
        ]);
});
