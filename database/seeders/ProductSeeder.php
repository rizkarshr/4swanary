<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\IndonesiaCity;
use App\Models\IndonesiaProvince;
use App\Models\Company;
use App\Models\Subcategory;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        $product = DB::table('products')->insert([
            'id' => '1',
            'name' => "Product's Name",
            'desc' => 'Product describe',
            'hs_code' => '1xxx0',
            'dimension' => '90 ml',
            'id_subcategory' => '1',
            'id_indonesia_province' => '11',
            'id_indonesia_city' => '1',
            'id_company' => '1',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        $product = DB::table('products')->insert([
            'id' => '2',
            'name' => "Product's Name",
            'desc' => 'Product describe',
            'hs_code' => '2xxx0',
            'dimension' => '8cmx7cm',
            'id_subcategory' => '13',
            'id_indonesia_province' => '12',
            'id_indonesia_city' => '55',
            'id_company' => '2',
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }
}
