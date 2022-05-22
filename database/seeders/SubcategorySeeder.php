<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Subcategory;
use App\Models\Category;
use Carbon\Carbon;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        //PRODUCT
        $subcategory = DB::table('subcategories')->insert([
            'id'=>'1',
            'name'=>'Beauty',
            'id_category'=>'2',
            'desc'=>'Beauty Products as cosmetics, skincare products, facecare products, etc.',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        $subcategory = DB::table('subcategories')->insert([
            'id'=>'2',
            'name'=>'Cultural and Creative',
            'id_category'=>'2',
            'desc'=>'Products related to the cultural and creative industries such as handicraft and etc.',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        $subcategory = DB::table('subcategories')->insert([
            'id'=>'3',
            'name'=>'Halal',
            'id_category'=>'2',
            'desc'=>'Halal products that are safe to consume or use according to Islamic law dan and has been recognized by the authorities.',
            'created_at' => $now,
            'updated_at' => $now,

        ]);

        $subcategory = DB::table('subcategories')->insert([
            'id'=>'4',
            'name'=>'Herbs and Spices',
            'id_category'=>'2',
            'desc'=>'Herbs and spices products that in form of raw goods, semi-finished goods, or finished goods.',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        $subcategory = DB::table('subcategories')->insert([
            'id'=>'5',
            'name'=>'Fishery',
            'id_category'=>'2',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        $subcategory = DB::table('subcategories')->insert([
            'id'=>'6',
            'name'=>'Food',
            'id_category'=>'2',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        $subcategory = DB::table('subcategories')->insert([
            'id'=>'7',
            'name'=>'Automotive',
            'id_category'=>'2',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        $subcategory = DB::table('subcategories')->insert([
            'id'=>'8',
            'name'=>'Food and Beverage',
            'id_category'=>'2',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        $subcategory = DB::table('subcategories')->insert([
            'id'=>'9',
            'name'=>'Household Needs',
            'id_category'=>'2',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        
        //COMPANY
        $subcategory = DB::table('subcategories')->insert([
            'id'=>'10',
            'name'=>'Beauty',
            'id_category'=>'1',
            'desc'=>'',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        $subcategory = DB::table('subcategories')->insert([
            'id'=>'11',
            'name'=>'Cultural and Creative',
            'id_category'=>'1',
            'desc'=>'',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        $subcategory = DB::table('subcategories')->insert([
            'id'=>'12',
            'name'=>'Herbs and Spices',
            'id_category'=>'1',
            'desc'=>'',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        $subcategory = DB::table('subcategories')->insert([
            'id'=>'13',
            'name'=>'Fishery',
            'id_category'=>'1',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        $subcategory = DB::table('subcategories')->insert([
            'id'=>'14',
            'name'=>'Food',
            'id_category'=>'1',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        $subcategory = DB::table('subcategories')->insert([
            'id'=>'15',
            'name'=>'Automotive',
            'id_category'=>'1'
        ]);

        $subcategory = DB::table('subcategories')->insert([
            'id'=>'16',
            'name'=>'Food and Beverage',
            'id_category'=>'1',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        $subcategory = DB::table('subcategories')->insert([
            'id'=>'17',
            'name'=>'Household Needs',
            'id_category'=>'1',
            'created_at' => $now,
            'updated_at' => $now,
        ]);
        
    }
}
