<?php

declare(strict_types=1);

use Database\Factories\CategoryFactory;
use Src\Categories\Domain\Models\Category;

describe('Category Test', function (): void {
    test('can access to its parent', function (): void {
        $expectedParent = CategoryFactory::new()
            ->createOne();

        $categoryWithParent = CategoryFactory::new()
            ->withParent($expectedParent)
            ->createOne();

        /** @var Category $parent */
        $parent = $categoryWithParent->parent;

        expect(
            array_diff($expectedParent->toArray(), $parent->toArray())
        )->toBeEmpty();
    });
});
