<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Budi Pranomo',
            'email' => 'budi@gmail.com',
            'password' => bcrypt('password')
        ]);
    }
}
