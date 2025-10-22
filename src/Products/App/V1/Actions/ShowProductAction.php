<?php

declare(strict_types=1);

namespace Src\Products\App\V1\Actions;

use Src\Products\Domain\Models\Product;

final class ShowProductAction
{
    public function execute(string $slugOrId): Product
    {
        return Product::query()
            ->with('category')
            ->where('slug', $slugOrId)
            ->orWhere('id', $slugOrId)
            ->firstOrFail();
    }
}
