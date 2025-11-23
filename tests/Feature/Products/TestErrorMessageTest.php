<?php

declare(strict_types=1);

use function Pest\Laravel\getJson;

test('shows friendly 404 message', function (): void {
    $response = getJson('/api/v1/products/SKU-NONEXISTENT-123');

    $response->assertNotFound()
        ->assertJson([
            'message' => 'The product could not be found',
        ]);
});
