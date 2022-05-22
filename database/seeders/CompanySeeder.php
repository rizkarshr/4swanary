<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Company;
use App\Models\Subcategory;
use App\Models\IndonesiaCity;
use App\Models\IndonesiaProvince;
use Carbon\Carbon;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        $company = DB::table('companies')->insert([
            'id' => '1',
            'name' => "1st Company Name",
            'since' => '2016',
            'website' => 'companyname.com',
            'contact_number' => '08xxxxxxxxxx',
            'id_subcategory' => '1',
            'id_indonesia_province' => '11',
            'id_indonesia_city' => '1',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        $company = DB::table('companies')->insert([
            'id' => '2',
            'name' => "2nd Company Name",
            'since' => '2020',
            'website' => 'companyname.com',
            'contact_number' => '08xxxxxxxxxx',
            'id_subcategory' => '4',
            'id_indonesia_province' => '12',
            'id_indonesia_city' => '55',
            'created_at' => $now,
            'updated_at' => $now,
        ]);
    }
}
