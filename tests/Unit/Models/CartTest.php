<?php

declare(strict_types=1);

use Database\Factories\CartFactory;
use Src\Carts\Domain\Enums\CartStatus;
use Src\Users\Domain\Models\User;

test('to array', function (): void {
    $cart = CartFactory::new()
        ->createOne()
        ->refresh();

    expect(array_keys($cart->toArray()))
        ->toBe([
            'id',
            'user_id',
            'session_id',
            'status',
            'created_at',
            'updated_at',
        ]);
});

test('status is cast to enum', function (): void {
    $cart = CartFactory::new()
        ->createOne();

    expect($cart->status)
        ->toBeInstanceOf(CartStatus::class);
});

test('user relation is accessible', function (): void {
    $cart = CartFactory::new()
        ->forUser()
        ->createOne();

    expect($cart->user)
        ->toBeInstanceOf(User::class);
});
