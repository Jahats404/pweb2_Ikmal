<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'galank',
            'level' => 'admin',
            'email' => 'galank@gmail.com',
            'password' => hash::make('galank'),
            'remember_token' => Str::random(60),
        ]);
        User::create(
        [
            'name' => 'rifki',
            'level' => 'karyawan',
            'email' => 'rifki@gmail.com',
            'password' => hash::make('rifki'),
            'remember_token' => Str::random(60),
        ]);
    }
}
