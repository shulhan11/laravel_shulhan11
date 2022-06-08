<?php

namespace Database\Seeders;

use App\Models\Rumahsakit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RumahsakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rumahsakit::factory(10)->create();
    }
}
