<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Src\Categories\App\V1\Controllers\ListCategoriesController;
use Src\Products\App\V1\Controllers\ListProductsController;
use Src\Products\App\V1\Controllers\ShowProductController;

Route::prefix('v1')->group(function (): void {
    Route::prefix('categories')->group(function (): void {
        Route::get('/', ListCategoriesController::class);
    });

    Route::prefix('products')->group(function (): void {
        Route::get('/', ListProductsController::class);
        Route::get('/{product:sku}', ShowProductController::class);
    });
});
