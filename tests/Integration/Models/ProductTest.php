<?php

declare(strict_types=1);

use Database\Factories\CategoryFactory;
use Database\Factories\ProductFactory;
use Illuminate\Support\Collection;
use Src\Categories\Domain\Models\Category;

describe('Product Test', function (): void {
    test('can access to its category', function (): void {
        $expectedCategory = CategoryFactory::new()
            ->createOne();

        $productWithCategory = ProductFactory::new()
            ->withCategory($expectedCategory)
            ->createOne();

        expect($expectedCategory->id)
            ->toEqual($productWithCategory->category->id)
            ->and($productWithCategory->category)
            ->toBeInstanceOf(Category::class);
    });

    test('category can access to its products', function (): void {
        $category = CategoryFactory::new()
            ->createOne();

        ProductFactory::new()
            ->withCategory($category)
            ->createMany(3);

        $category->refresh();

        expect($category->products)
            ->toBeInstanceOf(Collection::class)
            ->and($category->products->count())
            ->toBe(3);
    });
});
