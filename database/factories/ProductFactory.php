<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Src\Categories\Domain\Models\Category;
use Src\Products\Domain\Models\Product;
use Src\Shared\Domain\Enums\Currency;

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
            'description' => fake()->paragraph(),
            'price' => fake()->numberBetween(100, 100000000),
            'currency' => Currency::Usd,
            'sku' => fake()->unique()->bothify('SKU-####-????'),
            'stock' => fake()->numberBetween(0, 100),
            'category_id' => CategoryFactory::new(),
        ];
    }

    public function withCategory(Category|CategoryFactory|null $category = null): self
    {
        return $this->for(
            $category ?? CategoryFactory::new(),
            'category'
        );
    }

    public function outOfStock(): self
    {
        return $this->set('stock', 0);
    }

    public function inArs(): self
    {
        return $this->set('currency', Currency::Ars);
    }

    public function deleted(): self
    {
        return $this->set('deleted_at', now());
    }
}
