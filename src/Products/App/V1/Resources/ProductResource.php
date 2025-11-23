<?php

declare(strict_types=1);

namespace Src\Products\App\V1\Resources;

use Cknow\Money\Money;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Src\Categories\App\V1\Resources\CategoryResource;
use Src\Products\Domain\Models\Product;

/**
 * @mixin Product
 */
final class ProductResource extends JsonResource
{
    /**
     * @return array{
     *     id: int,
     *     name: string,
     *     description: string|null,
     *     price: Money,
     *     sku: string,
     *     stock: int,
     *     category: CategoryResource
     * }
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'sku' => $this->sku,
            'stock' => $this->stock,
            'category' => CategoryResource::make($this->whenLoaded('category')),
        ];
    }
}
