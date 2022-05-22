<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Laravolt\Indonesia\Seeds\CitiesSeeder;
// use Laravolt\Indonesia\Seeds\VillagesSeeder;
// use Laravolt\Indonesia\Seeds\DistrictsSeeder;
use Laravolt\Indonesia\Seeds\ProvincesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ProvincesSeeder::class,
            CitiesSeeder::class,
            // DistrictsSeeder::class,
            // VillagesSeeder::class,
            SubcategorySeeder::class,
            CategorySeeder::class,
            CompanySeeder::class,
            ProductSeeder::class,
        ]);
    }
}
