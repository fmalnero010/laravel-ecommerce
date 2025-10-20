<?php

declare(strict_types=1);

namespace Database\Seeders;

use Database\Factories\CategoryFactory;
use Illuminate\Database\Seeder;
use Src\Categories\Domain\Models\Category;

final class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $this->command->info('Deleting existing categories...');

        Category::query()
            ->truncate();

        $this->command->info('Seeding categories...');
        $this->command->info('Seeding categories without parent...');

        $categoriesWithoutParent = CategoryFactory::new()
            ->createMany(5);

        $this->command->info('Seeding categories with parent...');

        CategoryFactory::new()
            ->withParent()
            ->recycle($categoriesWithoutParent)
            ->createMany(2);

        $this->command->info('Seeding deleted categories...');

        CategoryFactory::new()
            ->deleted()
            ->createOne();
    }
}
