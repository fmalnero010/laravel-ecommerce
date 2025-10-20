<?php

declare(strict_types=1);

use Database\Factories\CategoryFactory;
use Src\Categories\App\V1\Resources\CategoryResource;

use function Pest\Laravel\getJson;

describe('List Categories', function (): void {
    test('returns a list of categories', function (): void {
        $category = CategoryFactory::new()
            ->createOne();

        $expectedResponse = CategoryResource::make($category->load('children'))
            ->response()
            ->getData(true);

        $response = getJson('/api/v1/categories');

        $response
            ->assertOk()
            ->assertJsonPath('data.0', $expectedResponse['data']);
    });

    test('returns a list of categories with its children', function (): void {
        $category = CategoryFactory::new()
            ->withParent()
            ->createOne();

        $expectedResponse = CategoryResource::make($category->load('children'))
            ->response()
            ->getData(true);

        $response = getJson('/api/v1/categories');

        $response
            ->assertOk()
            ->assertJsonPath('data.1', $expectedResponse['data']);
    });

    test('returns empty if there are no categories', function (): void {
        $response = getJson('/api/v1/categories');

        $response
            ->assertOk()
            ->assertJsonPath('data', []);
    });
});
