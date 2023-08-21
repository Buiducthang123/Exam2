<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use PHPUnit\Metadata\Uses;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Tao la quan tri vien',
            'email' => 'winnerbui0803@gmail.com',
            'password' => Hash::make('12345678'),
            'role_id'=>2,
        ]);
    }
}
