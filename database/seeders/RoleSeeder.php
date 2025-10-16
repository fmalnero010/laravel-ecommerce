<?php

declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Src\Authorization\Domain\Enums\Role as RoleEnum;

final class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = RoleEnum::cases();

        $this->command->info('Seeding roles...');

        foreach ($roles as $role) {
            Role::query()
                ->updateOrCreate(
                    ['name' => $role->value],
                    ['guard_name' => 'api']
                );
        }

        $this->command->info('Roles seeded!');
        $this->command->info('Deleting unused roles...');

        Role::query()
            ->whereNotIn('name', $roles)
            ->delete();

        $this->command->info('Unused roles deleted!');
    }
}
