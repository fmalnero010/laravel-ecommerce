<?php

declare(strict_types=1);

namespace Database\Factories;

use Cknow\Money\Money;
use Illuminate\Database\Eloquent\Factories\Factory;
use Src\Carts\Domain\Models\CartItem;

/**
 * @extends Factory<CartItem>
 */
final class CartItemFactory extends Factory
{
    protected $model = CartItem::class;

    public function definition(): array
    {
        $productPrice = fake()->randomNumber(2);

        return [
            'cart_id' => CartFactory::new(),
            'product_id' => ProductFactory::new()->withPrice($productPrice),
            'quantity' => fake()->numberBetween(1, 10),
            'price_snapshot' => new Money($productPrice),
        ];
    }
}
