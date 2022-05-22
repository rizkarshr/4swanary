<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        $user = DB::table('users')->insert([
            'id'=>'1',
            'username'=>'Dina',
            'name'=>'Ummi Pratidina',
            'email'=>'ummipratidina@gmail.com',
            'password'=>Hash::make('12345678'),
            'status'=>'Active',
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        $user = DB::table('users')->insert([
            'id'=>'2',
            'username'=>'Admin',
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('admin'),
            'status'=>'Active',
            'created_at' => $now,
            'updated_at' => $now,
        ]);
        
    }
}
