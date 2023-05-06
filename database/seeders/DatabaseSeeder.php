<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'firstname' => 'John',
            'lastname' => 'Doe',
            'email' => 'thibault@gmail.com',
            'password' => Hash::make('test'),
        ]);

        \App\Models\User::factory(10)->create();

        \App\Models\Product::factory(50)->create();
    }
}
