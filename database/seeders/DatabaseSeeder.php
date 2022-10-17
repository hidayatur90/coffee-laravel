<?php

namespace Database\Seeders;
use \App\Models\Coffee;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Coffee::create([
            'name' => 'Robusta',
            'unit_stock' => 30,
            'unit_price' => 5000
        ]);

        Coffee::create([
            'name' => 'Americano',
            'unit_stock' => 50,
            'unit_price' => 10000
        ]);
    }
}
