<?php

namespace Database\Seeders;

use App\Models\Hability;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HabilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hability::create(['name' => 'JAVA']);
        Hability::create(['name' => 'JAVASCRIPT']);
        Hability::create(['name' => 'PHP']);
        Hability::create(['name' => 'C#']);
        Hability::create(['name' => 'VUE']);
    }
}
