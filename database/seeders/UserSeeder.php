<?php

declare(strict_types=1);

namespace Database\Seeders;

use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

final class UserSeeder extends Seeder
{
    public function run(): void
    {
        UserFactory::new()
            ->createMany(5);

        UserFactory::new()
            ->unverified()
            ->createMany(5);
    }
}
