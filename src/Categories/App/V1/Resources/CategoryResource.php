<?php

declare(strict_types=1);

namespace Src\Categories\App\V1\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Src\Categories\Domain\Models\Category;

/**
 * @mixin Category
 */
final class CategoryResource extends JsonResource
{
    /**
     * @return array{
     *     id: int,
     *     name: string,
     *     slug: string,
     *     parent?: CategoryResource
     * }
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'parent' => self::make($this->whenLoaded('parent')),
        ];
    }
}
