<?php

declare(strict_types=1);

namespace Database\Factories;

use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Src\Authorization\Domain\Enums\Role;
use Src\Users\Domain\Models\User;

/**
 * @extends Factory<User>
 */
final class UserFactory extends Factory
{
    protected $model = User::class;

    private static ?string $password = null;

    /**
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => self::$password ??= Hash::make('password'),
        ];
    }

    public function configure(): self
    {
        return $this->afterCreating(function (User $user): void {
            if ($user->permissions()->count() === 0) {
                $user->assignRole(Role::Customer);
            }
        });
    }

    public function unverified(): self
    {
        return $this->set('email_verified_at', null);
    }

    public function deleted(?CarbonImmutable $date = null): self
    {
        return $this->set('deleted_at', $date ?? now());
    }

    public function withRole(Role $role): self
    {
        return $this->afterCreating(function (User $user) use ($role): void {
            $user->assignRole($role);
        });
    }
}
