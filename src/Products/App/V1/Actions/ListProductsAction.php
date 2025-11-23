<?php

declare(strict_types=1);

namespace Src\Products\App\V1\Actions;

use Illuminate\Support\Collection;
use Src\Products\Domain\Models\Product;

final class ListProductsAction
{
    /**
     * @return Collection<int, Product>
     */
    public function execute(): Collection
    {
        return Product::query()
            ->with('category')
            ->get();
    }
}
