<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Src\Categories\App\V1\Controllers\ListCategoriesController;

Route::prefix('v1')->group(function (): void {
    Route::prefix('categories')->group(function (): void {
        Route::get('/', ListCategoriesController::class);
    });
});
