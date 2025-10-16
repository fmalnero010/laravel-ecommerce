<?php

declare(strict_types=1);

namespace Src\Categories\Domain\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

final class Category extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    public function casts(): array
    {
        return [
            'deleted_at' => 'immutable_datetime',
        ];
    }

    /**
     * @return BelongsTo<self, $this>
     */
    public function parent(): BelongsTo
    {
        return $this->belongsTo(self::class, 'parent_id');
    }
}
