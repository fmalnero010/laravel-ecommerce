<?php

declare(strict_types=1);

use Database\Factories\ProductFactory;
use Src\Products\App\V1\Resources\ProductResource;

use function Pest\Laravel\getJson;

describe('List Products', function (): void {
    test('returns a list of products', function (): void {
        $product = ProductFactory::new()
            ->withCategory()
            ->createOne();

        $expectedResponse = ProductResource::make($product->load('category'))
            ->response()
            ->getData(true);

        $response = getJson('/api/v1/products');

        $response
            ->assertOk()
            ->assertJsonPath('data.0', $expectedResponse['data']);
    });

    test('returns a list of products with category', function (): void {
        $product = ProductFactory::new()
            ->withCategory()
            ->createOne();

        $response = getJson('/api/v1/products');

        $response
            ->assertOk()
            ->assertJsonStructure([
                'data' => [
                    '*' => [
                        'id',
                        'name',
                        'slug',
                        'description',
                        'price',
                        'sku',
                        'stock',
                        'category' => [
                            'id',
                            'name',
                            'slug',
                        ],
                    ],
                ],
            ]);
    });

    test('returns empty if there are no products', function (): void {
        $response = getJson('/api/v1/products');

        $response
            ->assertOk()
            ->assertJsonPath('data', []);
    });
});
