<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategory = DB::table('category')->insert([
            'id'=>'1',
            'name'=>'Product',
            'desc'=>'Products from existing companies'
        ]);

        $subcategory = DB::table('category')->insert([
            'id'=>'2',
            'name'=>'MSME',
            'desc'=>"Companies in the form of SME, MSME, or others (UKM and UMKM in Indonesia)"
        ]);
    }
}
