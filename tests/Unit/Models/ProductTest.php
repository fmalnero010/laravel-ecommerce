<?php

declare(strict_types=1);

use Database\Factories\ProductFactory;

test('to array', function (): void {
    $product = ProductFactory::new()
        ->createOne()
        ->refresh();

    expect(array_keys($product->toArray()))
        ->toBe([
            'id',
            'name',
            'slug',
            'description',
            'price',
            'sku',
            'stock',
            'category_id',
            'created_at',
            'updated_at',
            'deleted_at',
        ]);
});
