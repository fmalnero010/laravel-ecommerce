<?php

declare(strict_types=1);

use Cknow\Money\Money;
use Database\Factories\CategoryFactory;
use Database\Factories\ProductFactory;
use Src\Categories\Domain\Models\Category;
use Src\Products\Domain\Models\Product;
use Src\Shared\Domain\Enums\Currency;

test('can create product with all fields', function (): void {
    $category = CategoryFactory::new()->createOne();

    $product = Product::query()->create([
        'name' => 'Test Product',
        'description' => 'Test Description',
        'price' => 1000,
        'currency' => Currency::Usd,
        'sku' => 'TEST-SKU-001',
        'stock' => 10,
        'category_id' => $category->id,
    ]);

    expect($product)
        ->name->toBe('Test Product')
        ->description->toBe('Test Description')
        ->price->toBeInstanceOf(Money::class)
        ->currency->toBe(Currency::Usd)
        ->sku->toBe('TEST-SKU-001')
        ->stock->toBe(10)
        ->category_id->toBe($category->id);
});

test('price is cast to Money object', function (): void {
    $product = ProductFactory::new()->createOne([
        'price' => 5000,
        'currency' => Currency::Usd,
    ]);

    expect($product->price)
        ->toBeInstanceOf(Money::class)
        ->getAmount()->toBe('5000')
        ->getCurrency()->getCode()->toBe('USD');
});

test('price can be set as integer and retrieved as Money', function (): void {
    $product = ProductFactory::new()->createOne();

    $product->price = 7500;
    $product->save();

    $product->refresh();

    expect($product->price)
        ->toBeInstanceOf(Money::class)
        ->getAmount()->toBe('7500');
});

test('currency is cast to Currency enum', function (): void {
    $product = ProductFactory::new()->createOne([
        'currency' => Currency::Ars,
    ]);

    expect($product->currency)
        ->toBeInstanceOf(Currency::class)
        ->toBe(Currency::Ars);
});

test('to array includes all fields', function (): void {
    $product = ProductFactory::new()
        ->createOne()
        ->refresh();

    $array = $product->toArray();

    expect($array)
        ->toHaveKeys([
            'id',
            'name',
            'description',
            'price',
            'currency',
            'sku',
            'stock',
            'category_id',
            'created_at',
            'updated_at',
            'deleted_at',
        ])
        ->and($array['price'])->toBeArray()
        ->and($array['currency'])->toBeString();
});

test('belongs to category', function (): void {
    $category = CategoryFactory::new()->createOne();
    $product = ProductFactory::new()->createOne([
        'category_id' => $category->id,
    ]);

    expect($product->category)
        ->toBeInstanceOf(Category::class)
        ->id->toBe($category->id);
});

test('can be soft deleted', function (): void {
    $product = ProductFactory::new()->createOne();

    $product->delete();

    expect($product->deleted_at)->not->toBeNull()
        ->and(Product::withTrashed()->find($product->id))->not->toBeNull()
        ->and(Product::query()->find($product->id))->toBeNull();
});

test('can be restored after soft delete', function (): void {
    $product = ProductFactory::new()->createOne();

    $product->delete();
    $product->restore();

    expect($product->deleted_at)->toBeNull()
        ->and(Product::query()->find($product->id))->not->toBeNull();
});

test('factory creates product with valid data', function (): void {
    $product = ProductFactory::new()->createOne();

    expect($product)
        ->name->toBeString()
        ->description->toBeString()
        ->price->toBeInstanceOf(Money::class)
        ->currency->toBeInstanceOf(Currency::class)
        ->sku->toBeString()->toStartWith('SKU-')
        ->stock->toBeInt()->toBeGreaterThanOrEqual(0)->toBeLessThanOrEqual(100)
        ->category->toBeInstanceOf(Category::class);
});

test('factory out of stock state sets stock to zero', function (): void {
    $product = ProductFactory::new()->outOfStock()->createOne();

    expect($product->stock)->toBe(0);
});

test('factory in ars state sets currency to ARS', function (): void {
    $product = ProductFactory::new()->inArs()->createOne();

    expect($product->currency)->toBe(Currency::Ars)
        ->and($product->price->getCurrency()->getCode())->toBe('ARS');
});

test('factory deleted state soft deletes product', function (): void {
    $product = ProductFactory::new()->deleted()->createOne();

    expect($product->deleted_at)->not->toBeNull()
        ->and(Product::query()->find($product->id))->toBeNull()
        ->and(Product::withTrashed()->find($product->id))->not->toBeNull();
});

test('factory with category uses provided category', function (): void {
    $category = CategoryFactory::new()->createOne();
    $product = ProductFactory::new()->withCategory($category)->createOne();

    expect($product->category_id)->toBe($category->id);
});
