<?php

declare(strict_types=1);

namespace Src\Products\App\V1\Controllers;

use Illuminate\Http\JsonResponse;
use Src\Products\App\V1\Resources\ProductResource;
use Src\Products\Domain\Models\Product;

final class ShowProductController
{
    public function __invoke(
        Product $product,
    ): JsonResponse {
        $product->load('category');

        return ProductResource::make($product)
            ->response();
    }
}
