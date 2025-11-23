<?php

declare(strict_types=1);

use Database\Factories\ProductFactory;
use Illuminate\Support\Arr;
use Src\Products\App\V1\Resources\ProductResource;

use function Pest\Laravel\getJson;

describe('List Products', function (): void {
    test('returns a list of products', function (): void {
        $product = ProductFactory::new()->createOne();

        /** @var array<string, mixed> $expectedResponse */
        $expectedResponse = ProductResource::make($product->load('category'))
            ->response()
            ->getData(true);

        $response = getJson('/api/v1/products');

        $response
            ->assertOk()
            ->assertJsonPath('data.0', Arr::array($expectedResponse, 'data'));
    });

    test('returns empty if there are no products', function (): void {
        $response = getJson('/api/v1/products');

        $response
            ->assertOk()
            ->assertJsonPath('data', []);
    });
});
