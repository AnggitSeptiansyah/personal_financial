<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserSeeder::class);
        $this->call(ExpenseTypeSeeder::class);
        $this->call(IncomeTypeSeeder::class);
        $this->call(ExpenseSeeder::class);
        $this->call(IncomeSeeder::class);
    }
}

// DB::table('expenses')->whereRaw('month(created_at)', $data)->get()