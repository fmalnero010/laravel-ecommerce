<?php

declare(strict_types=1);

use Database\Factories\CartFactory;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Collection;
use Src\Carts\Domain\Models\Cart;

test('to array', function (): void {
    $user = UserFactory::new()
        ->createOne()
        ->refresh();

    expect(array_keys($user->toArray()))
        ->toBe([
            'id',
            'name',
            'email',
            'email_verified_at',
            'created_at',
            'updated_at',
            'deleted_at',
        ]);
});

test('carts relation is accessible', function (): void {
    $user = UserFactory::new()
        ->hasCarts()
        ->createOne();

    expect($user->carts)
        ->toBeInstanceOf(Collection::class)
        ->and($user->carts->count())
        ->toBe(1)
        ->and($user->carts->firstOrFail())
        ->toBeInstanceOf(Cart::class);
});

test('current cart relation is accessible and works', function (): void {
    $abandonedCart = CartFactory::new()
        ->abandoned();

    $user = UserFactory::new()
        ->hasCarts($abandonedCart)
        ->createOne();

    $activeCart = CartFactory::new()
        ->createOne();

    $user->carts()->save($activeCart);

    expect($user->currentCart)
        ->toBeInstanceOf(Cart::class)
        ->and($user->currentCart?->getAttributes())
        ->toBe($activeCart->refresh()->getAttributes());
});
