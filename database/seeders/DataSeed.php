<?php

namespace Database\Seeders;

use App\Models\Data;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DataSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'jemek',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'id_roles' => '1',
        ]);
    }
}
