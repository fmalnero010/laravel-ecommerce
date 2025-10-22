<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Src\Categories\Domain\Models\Category;
use Src\Products\Domain\Models\Product;

/**
 * @extends Factory<Product>
 */
final class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        $name = fake()->words(3, true);

        return [
            'name' => $name,
            'slug' => fn (array $attributes) => Str::slug($attributes['name']),
            'description' => fake()->paragraph(),
            'price' => fake()->randomFloat(2, 10, 1000),
            'sku' => fake()->unique()->bothify('SKU-####-????'),
            'stock' => fake()->numberBetween(0, 100),
        ];
    }

    public function withCategory(Category|CategoryFactory|null $category = null): self
    {
        return $this->for($category ?? Category::factory(), 'category');
    }

    public function outOfStock(): self
    {
        return $this->state(fn (array $attributes) => [
            'stock' => 0,
        ]);
    }

    public function deleted(): self
    {
        return $this->state(fn (array $attributes) => [
            'deleted_at' => now(),
        ]);
    }
}
