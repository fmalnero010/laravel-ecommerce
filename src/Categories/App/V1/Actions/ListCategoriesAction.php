<?php

declare(strict_types=1);

namespace Src\Categories\App\V1\Actions;

use Illuminate\Support\Collection;
use Src\Categories\Domain\Models\Category;

final class ListCategoriesAction
{
    /**
     * @return Collection<int, Category>
     */
    public function execute(): Collection
    {
        return Category::query()
            ->get();
    }
}
