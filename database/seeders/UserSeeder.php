<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

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
            'name' =>  'Gerson',
            'email' => 'gchiule@gmail.com',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'name' =>  'Hugo',
            'email' => 'gchiule@mozait.co.mz',
            'password' => bcrypt('123456')
        ]);
    }
}
