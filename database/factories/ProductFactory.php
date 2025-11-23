<?php

declare(strict_types=1);

namespace Database\Factories;

use Cknow\Money\Money;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
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
        $priceAsFloat = fake()->randomFloat(2, 100, 1000);

        return [
            'name' => $name,
            'description' => fake()->paragraph(),
            'price' => new Money($priceAsFloat),
            'sku' => fake()->unique()->bothify('SKU-####-????'),
            'stock' => fake()->numberBetween(0, 100),
            'category_id' => CategoryFactory::new(),
        ];
    }

    public function withCategory(Category|CategoryFactory $category): self
    {
        return $this->for($category, 'category');
    }

    public function outOfStock(): self
    {
        return $this->set('stock', 0);
    }

    public function inArs(): self
    {
        return $this->state(function (array $attributes): array {
            /** @var Money $price */
            $price = Arr::get($attributes, 'price');

            return [
                'price' => $price->setCurrency(new \Money\Currency(Currency::Ars->value)),
            ];
        });
    }

    public function deleted(): self
    {
        return $this->set('deleted_at', now());
    }
}
