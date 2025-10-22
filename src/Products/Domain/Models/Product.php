<?php

declare(strict_types=1);

namespace Src\Products\Domain\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Src\Categories\Domain\Models\Category;

final class Product extends Model
{
    use SoftDeletes;

    public function casts(): array
    {
        return [
            'price' => 'decimal:2',
            'stock' => 'integer',
            'deleted_at' => 'immutable_datetime',
        ];
    }

    /**
     * @return BelongsTo<Category, $this>
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
