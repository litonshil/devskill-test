<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //for factory(for inserting more dummy data)
        User::factory(10)->create();

        //for seeder(for inserting less dummy data)
        // $this->call([
        //     UserSeeder::class,
        // ]);
    }
}
