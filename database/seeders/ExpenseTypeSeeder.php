<?php

namespace Database\Seeders;

use App\Models\ExpenseType;
use Illuminate\Database\Seeder;

class ExpenseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExpenseType::create([
            'name' => 'Buy snacks',
        ]);

        ExpenseType::create([
            'name' => 'Upgrade gadget',
        ]);

        ExpenseType::create([
            'name' => 'Hardware',
        ]);
    }
}
