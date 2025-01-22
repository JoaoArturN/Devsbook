<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->state(
            [
                'name' => 'João Artur',
                'email' => 'joaoarturgustavo@gmail.com',
            ]
        )
            ->afterCreating(function (User $user) {
                DB::table('user_details')->insert([
                    'user_id' => $user->id,
                    'city' => 'Lisboa',
                    'work' => 'Programador',
                    'birthdate' => '2020-01-01',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            })
            ->create();

    }
}
