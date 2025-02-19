<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
            'name' => 'nailong',
            'email' => 'dino@gmail.com',
            'password' => bcrypt('dino12345'),
            'alamat' => 'jonggol',
            'no_hp' => '123456789',
            ]);
            
    }
}
