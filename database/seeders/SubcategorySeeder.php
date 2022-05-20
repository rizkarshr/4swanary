<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //PRODUCT
        $subcategory = DB::table('subcategory')->insert([
            'id'=>'1',
            'name'=>'Beauty',
            'id_category'=>'2'
        ]);

        $subcategory = DB::table('subcategory')->insert([
            'id'=>'2',
            'name'=>'Cultural and Creative',
            'id_category'=>'2'
        ]);

        $subcategory = DB::table('subcategory')->insert([
            'id'=>'3',
            'name'=>'Halal',
            'id_category'=>'2'
        ]);

        $subcategory = DB::table('subcategory')->insert([
            'id'=>'4',
            'name'=>'Herbs and Spices',
            'id_category'=>'2'
        ]);

        $subcategory = DB::table('subcategory')->insert([
            'id'=>'5',
            'name'=>'Fishery',
            'id_category'=>'2'
        ]);

        $subcategory = DB::table('subcategory')->insert([
            'id'=>'6',
            'name'=>'Food',
            'id_category'=>'2'
        ]);

        $subcategory = DB::table('subcategory')->insert([
            'id'=>'7',
            'name'=>'Automotive',
            'id_category'=>'2'
        ]);

        $subcategory = DB::table('subcategory')->insert([
            'id'=>'8',
            'name'=>'Food and Beverage',
            'id_category'=>'2'
        ]);

        $subcategory = DB::table('subcategory')->insert([
            'id'=>'6',
            'name'=>'Household Needs',
            'id_category'=>'2'
        ]);
        
    }
}
