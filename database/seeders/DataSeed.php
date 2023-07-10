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

    Data::factory()
    ->count(10)
    ->create();

}
}
