<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Src\Categories\Domain\Models\Category;
use Src\Products\Domain\Enums\Currency;
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
        $priceInCents = fake()->numberBetween(10000, 100000);

        return [
            'name' => $name,
            'description' => fake()->paragraph(),
            'price' => $priceInCents,
            'sku' => fake()->unique()->bothify('SKU-####-????'),
            'stock' => fake()->numberBetween(0, 100),
            'category_id' => CategoryFactory::new(),
        ];
    }

    public function withPrice(int $priceInCents): self
    {
        return $this->set('price', $priceInCents);
    }

    public function withCategory(Category|CategoryFactory $category): self
    {
        return $this->for($category, 'category');
    }

    public function outOfStock(): self
    {
        return $this->state(['stock' => 0]);
    }

    public function inArs(): self
    {
        return $this->state([
            'currency' => Currency::Ars->value, // Guardar como string 'ARS'
        ]);
    }

    public function deleted(): self
    {
        return $this->set('deleted_at', now());
    }
}
