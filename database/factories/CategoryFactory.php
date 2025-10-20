<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Src\Categories\Domain\Models\Category;

/**
 * @extends Factory<Category>
 */
final class CategoryFactory extends Factory
{
    protected $model = Category::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'slug' => fn (array $attributes) => Str::slug($attributes['name']),
        ];
    }

    public function withParent(Category|self|null $category = null): self
    {
        return $this->for($category ?? self::new(), 'parent');
    }

    public function withChildren(?self $category = null): self
    {
        return $this->has($category ?? self::new(), 'children');
    }

    public function deleted(): self
    {
        return $this->set('deleted_at', now());
    }
}
