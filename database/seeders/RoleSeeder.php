<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Roles;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        Roles::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['name' => 'Administrator'],
            ['name' => 'User'],
        ];

        foreach ($data as $value) {
            Roles::insert([
                'name' => $value['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
    }
}
}
