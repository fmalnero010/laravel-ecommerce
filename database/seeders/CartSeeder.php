<?php

declare(strict_types=1);

namespace Database\Seeders;

use Database\Factories\CartFactory;
use Illuminate\Database\Seeder;
use Src\Carts\Domain\Models\Cart;

final class CartSeeder extends Seeder
{
    public function run(): void
    {
        $this->command->line('Deleting existing carts...');

        Cart::query()
            ->truncate();

        $this->command->line('Seeding new carts for session...');

        CartFactory::new()
            ->forSession()
            ->createMany(5);

        $this->command->line('Seeding new carts for user...');

        CartFactory::new()
            ->forUser()
            ->createMany(5);

        $this->command->line('Seeding new abandoned carts...');

        CartFactory::new()
            ->abandoned()
            ->createMany(5);

        $this->command->line('Seeding new completed carts...');

        CartFactory::new()
            ->completed()
            ->createMany(5);
    }
}
