<?php

declare(strict_types=1);

namespace Src\Categories\App\V1\Controllers;

use Illuminate\Http\JsonResponse;
use Src\Categories\App\V1\Actions\ListCategoriesAction;
use Src\Categories\App\V1\Resources\CategoryResource;

final class ListCategoriesController
{
    public function __invoke(
        ListCategoriesAction $action,
    ): JsonResponse {
        $categories = $action->execute();

        return CategoryResource::collection($categories)
            ->response();
    }
}
