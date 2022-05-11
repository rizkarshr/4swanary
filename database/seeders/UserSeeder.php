<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Auth;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = DB::table('users')->insert([
            'id'=>'1',
            'username'=>'Dina',
            'name'=>'Ummi Pratidina',
            'email'=>'ummipratidina@gmail.com',
            'password'=>Hash::make('12345678'),
            'status'=>'Active'
        ]);

        
    }
}
