<?php

declare(strict_types=1);

use Database\Factories\ProductFactory;
use Src\Products\Domain\Models\Product;

use function Pest\Laravel\getJson;

test('debug product route', function (): void {
    $product = ProductFactory::new()
        ->withCategory()
        ->createOne();

    dump([
        'product_id' => $product->id,
        'product_sku' => $product->sku,
        'route_key_name' => $product->getRouteKeyName(),
        'route_key_value' => $product->getRouteKey(),
        'url' => "/api/v1/products/{$product->sku}",
        'exists_in_db' => Product::query()->where('sku', $product->sku)->exists(),
        'product_from_db' => Product::query()->where('sku', $product->sku)->first()?->toArray(),
    ]);

    $response = getJson("/api/v1/products/{$product->sku}");

    dump([
        'status' => $response->status(),
        'content' => $response->content(),
    ]);

    $response->assertOk();
});
