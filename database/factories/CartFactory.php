<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Src\Carts\Domain\Enums\CartStatus;
use Src\Carts\Domain\Models\Cart;
use Src\Users\Domain\Models\User;

/**
 * @extends Factory<Cart>
 */
final class CartFactory extends Factory
{
    protected $model = Cart::class;

    public function definition(): array
    {
        $hasUser = fake()->boolean();

        return [
            'user_id' => $hasUser ? UserFactory::new() : null,
            'session_id' => $hasUser ? null : fake()->uuid(),
            'status' => CartStatus::Active,
        ];
    }

    public function forUser(UserFactory|User|null $user = null): self
    {
        return $this
            ->for($user ?? UserFactory::new(), 'user')
            ->set('session_id', null);
    }

    public function forSession(?string $session_id = null): self
    {
        return $this
            ->set('session_id', $session_id ?? fake()->uuid())
            ->set('user_id', null);
    }

    public function abandoned(): self
    {
        return $this->set('status', CartStatus::Abandoned);
    }

    public function completed(): self
    {
        return $this->set('status', CartStatus::Completed);
    }
}
