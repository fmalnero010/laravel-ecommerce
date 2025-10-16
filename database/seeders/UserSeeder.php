<?php

declare(strict_types=1);

namespace Database\Seeders;

use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;
use Src\Authorization\Domain\Enums\Role;
use Src\Users\Domain\Models\User;

final class UserSeeder extends Seeder
{
    public function run(): void
    {
        $this->command->info('Deleting users...');

        User::query()->truncate();

        $this->command->info('Seeding users...');

        $this->command->info('Seeding administrators...');

        UserFactory::new()
            ->withRole(Role::Administrator)
            ->createMany(5);

        $this->command->info('Seeding customers...');

        UserFactory::new()
            ->unverified()
            ->withRole(Role::Customer)
            ->createMany(2);

        UserFactory::new()
            ->unverified()
            ->deleted()
            ->withRole(Role::Customer)
            ->createMany(2);
    }
}
