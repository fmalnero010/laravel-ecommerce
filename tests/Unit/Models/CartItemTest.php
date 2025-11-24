<?php

declare(strict_types=1);

use Cknow\Money\Money;
use Database\Factories\CartItemFactory;
use Src\Carts\Domain\Models\Cart;

test('to array', function (): void {
    $cartItem = CartItemFactory::new()
        ->createOne()
        ->refresh();

    expect(array_keys($cartItem->toArray()))
        ->toBe([
            'id',
            'cart_id',
            'product_id',
            'quantity',
            'price_snapshot',
            'currency',
            'created_at',
            'updated_at',
        ]);
});

test('price snapshot is casted to money', function (): void {
    $cartItem = CartItemFactory::new()
        ->createOne();

    expect($cartItem->price_snapshot)
        ->toBeInstanceOf(Money::class);
});

test('cart relation is accessible', function (): void {
    $cartItem = CartItemFactory::new()
        ->createOne();

    expect($cartItem->cart)
        ->toBeInstanceOf(Cart::class);
});

test('total attribute is well calculated', function (): void {
    $cartItem = CartItemFactory::new()
        ->createOne();

    $expectedTotal = $cartItem->price_snapshot->multiply(
        $cartItem->quantity
    );

    expect($cartItem->total())
        ->toEqual($expectedTotal);
});
