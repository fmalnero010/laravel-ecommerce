<?php

declare(strict_types=1);

namespace Src\Products\App\V1\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use phpDocumentor\Reflection\DocBlock\Description;
use Src\Categories\App\V1\Resources\CategoryResource;
use Src\Products\Domain\Models\Product;
use Src\Shared\Domain\Enums\Currency;

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
     *     price: string,
     *     currency: Currency,
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
            'price' => number_format((int) $this->price->getAmount() / 100, 2, '.', ''),
            'currency' => $this->currency,
            'sku' => $this->sku,
            'stock' => $this->stock,
            'category' => CategoryResource::make($this->whenLoaded('category')),
        ];
    }
}
