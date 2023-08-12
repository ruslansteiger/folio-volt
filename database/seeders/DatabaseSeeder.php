<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(11)
            ->sequence(
                ['name' => 'Ruslan Steiger'],
                ['name' => 'Henning Dahlheim'],
                ['name' => 'Sandro Gehri'],
                ['name' => 'Jen Stehlik'],
                ['name' => 'Michael Ramstein'],
                ['name' => 'Julian Varso'],
                ['name' => 'Ed Grosvenor'],
                ['name' => 'Rémy Böhler'],
                ['name' => 'Gamdelidze Vaso'],
                ['name' => 'Etienne Roulet'],
                ['name' => 'Damjan Tropcic'],
            )
            ->create();
    }
}
