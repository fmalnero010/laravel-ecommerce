<?php

declare(strict_types=1);

namespace Src\Products\App\V1\Controllers;

use Illuminate\Http\JsonResponse;
use Src\Products\App\V1\Actions\ShowProductAction;
use Src\Products\App\V1\Resources\ProductResource;

final class ShowProductController
{
    public function __invoke(
        string $slugOrId,
        ShowProductAction $action,
    ): JsonResponse {
        $product = $action->execute($slugOrId);

        return (new ProductResource($product))
            ->response();
    }
}
