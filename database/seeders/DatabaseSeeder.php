<?php

namespace Database\Seeders;

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

        $this->call([
            AdminSeeder::class,
            CarouselImageSeeder::class,
            NewsActivitiesSeeder::class,
            ContactSeeder::class,
            AchievementSeeder::class,
            UnitsSeeder::class,
            UnitDetailSeeder::class,
            UnitExtraSeeder::class,
            UnitBrosurSeeder::class,
            UnitProgramSeeder::class,
        ]);
    }
}
