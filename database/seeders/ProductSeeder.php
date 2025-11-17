<?php

declare(strict_types=1);

namespace Database\Seeders;

use Database\Factories\ProductFactory;
use Illuminate\Database\Seeder;
use Src\Categories\Domain\Models\Category;
use Src\Products\Domain\Models\Product;

final class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $this->command->info('Deleting existing products...');

        Product::query()
            ->truncate();

        $this->command->info('Seeding products...');

        $categories = Category::query()
            ->get();

        $this->command->info('Seeding products with categories...');

        ProductFactory::new()
            ->withCategory()
            ->recycle($categories)
            ->createMany(20);

        $this->command->info('Seeding out of stock products...');

        ProductFactory::new()
            ->withCategory()
            ->outOfStock()
            ->recycle($categories)
            ->createMany(3);

        $this->command->info('Seeding products in ARS...');

        ProductFactory::new()
            ->withCategory()
            ->inArs()
            ->recycle($categories)
            ->createMany(3);

        $this->command->info('Seeding deleted products...');

        ProductFactory::new()
            ->withCategory()
            ->deleted()
            ->recycle($categories)
            ->createOne();
    }
}
