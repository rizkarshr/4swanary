<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use Carbon\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        $category = DB::table('categories')->insert([
            'id'=>'1',
            'name'=>'Product',
            'desc'=>'Products from existing companies',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        $category = DB::table('categories')->insert([
            'id'=>'2',
            'name'=>'MSME',
            'desc'=>"Companies in the form of SME, MSME, or others (UKM and UMKM in Indonesia)",
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }
}
