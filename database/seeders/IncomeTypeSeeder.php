<?php

namespace Database\Seeders;

use App\Models\IncomeType;
use Illuminate\Database\Seeder;

class IncomeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        IncomeType::create([
            'name' => 'Parents money',
        ]);

        IncomeType::create([
            'name' => 'Fiverr',
        ]);

        IncomeType::create([
            'name' => 'Upwork',
        ]);
    }
}
