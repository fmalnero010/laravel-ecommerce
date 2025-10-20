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

        expect($expectedParent->id)
            ->toEqual($categoryWithParent->parent->id);
    });

    test('can access to its children', function (): void {
        $categoryWithChildren = CategoryFactory::new()
            ->withChildren()
            ->createOne();

        expect($categoryWithChildren->children)
            ->toBeInstanceOf(Illuminate\Support\Collection::class)
            ->and($categoryWithChildren->children->first())
            ->toBeInstanceOf(Category::class);
    });
});
