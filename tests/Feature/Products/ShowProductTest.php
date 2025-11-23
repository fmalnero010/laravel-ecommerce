<?php

declare(strict_types=1);

use Database\Factories\ProductFactory;
use Illuminate\Support\Arr;
use Src\Products\App\V1\Resources\ProductResource;

use function Pest\Laravel\getJson;

describe('Show Product', function (): void {
    test('returns a product by id', function (): void {
        $product = ProductFactory::new()->createOne();

        /** @var array<string, mixed> $expectedResponse */
        $expectedResponse = ProductResource::make($product->load('category'))
            ->response()
            ->getData(true);

        $response = getJson("/api/v1/products/$product->sku");

        $response
            ->assertOk()
            ->assertJsonPath('data', Arr::array($expectedResponse, 'data'));
    });

    test('returns a product by slug', function (): void {
        $product = ProductFactory::new()->createOne();

        /** @var array<string, mixed> $expectedResponse */
        $expectedResponse = ProductResource::make($product->load('category'))
            ->response()
            ->getData(true);

        $response = getJson("/api/v1/products/$product->sku");

        $response
            ->assertOk()
            ->assertJsonPath('data', Arr::array($expectedResponse, 'data'));
    });

    test('returns 404 if product does not exist', function (): void {
        $response = getJson('/api/v1/products/non-existent-slug');

        $response->assertNotFound();
    });
});
