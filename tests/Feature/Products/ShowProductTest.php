<?php

declare(strict_types=1);

use Database\Factories\ProductFactory;
use Src\Products\App\V1\Resources\ProductResource;

use function Pest\Laravel\getJson;

describe('Show Product', function (): void {
    test('returns a product by id', function (): void {
        $product = ProductFactory::new()
            ->withCategory()
            ->createOne();

        $expectedResponse = ProductResource::make($product->load('category'))
            ->response()
            ->getData(true);

        $response = getJson("/api/v1/products/{$product->id}");

        $response
            ->assertOk()
            ->assertJsonPath('data', $expectedResponse['data']);
    });

    test('returns a product by slug', function (): void {
        $product = ProductFactory::new()
            ->withCategory()
            ->createOne();

        $expectedResponse = ProductResource::make($product->load('category'))
            ->response()
            ->getData(true);

        $response = getJson("/api/v1/products/{$product->slug}");

        $response
            ->assertOk()
            ->assertJsonPath('data', $expectedResponse['data']);
    });

    test('returns 404 if product does not exist', function (): void {
        $response = getJson('/api/v1/products/non-existent-slug');

        $response->assertNotFound();
    });

    test('returns product with category', function (): void {
        $product = ProductFactory::new()
            ->withCategory()
            ->createOne();

        $response = getJson("/api/v1/products/{$product->slug}");

        $response
            ->assertOk()
            ->assertJsonStructure([
                'data' => [
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
            ]);
    });
});
