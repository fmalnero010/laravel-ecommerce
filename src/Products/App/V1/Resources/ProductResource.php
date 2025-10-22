<?php

declare(strict_types=1);

namespace Src\Products\App\V1\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Src\Categories\App\V1\Resources\CategoryResource;
use Src\Products\Domain\Models\Product;

/**
 * @mixin Product
 */
final class ProductResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'description' => $this->description,
            'price' => $this->price,
            'sku' => $this->sku,
            'stock' => $this->stock,
            'category' => new CategoryResource($this->whenLoaded('category')),
        ];
    }
}
