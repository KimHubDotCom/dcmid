<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BigBike;

class BigBikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BigBike::factory(8)->create();
    }
}
