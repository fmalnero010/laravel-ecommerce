<?php

declare(strict_types=1);

namespace Src\Products\App\V1\Actions;

use Illuminate\Pagination\LengthAwarePaginator;
use Src\Products\Domain\Models\Product;

final class ListProductsAction
{
    /**
     * @return LengthAwarePaginator<int, Product>
     */
    public function execute(): LengthAwarePaginator
    {
        return Product::query()
            ->with('category')
            ->paginate();
    }
}
