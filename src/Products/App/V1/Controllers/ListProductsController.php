<?php

declare(strict_types=1);

namespace Src\Products\App\V1\Controllers;

use Illuminate\Http\JsonResponse;
use Src\Products\App\V1\Actions\ListProductsAction;
use Src\Products\App\V1\Resources\ProductResource;

final class ListProductsController
{
    public function __invoke(
        ListProductsAction $action,
    ): JsonResponse {
        $products = $action->execute();

        return ProductResource::collection($products)
            ->response();
    }
}
