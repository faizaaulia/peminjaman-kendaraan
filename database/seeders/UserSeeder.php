<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'Admin', 'username' => 'admin', 'password' => Hash::make('password'), 'role' => 'admin'],
            ['name' => 'Admin', 'username' => 'admin2', 'password' => Hash::make('password'), 'role' => 'admin'],
            ['name' => 'Supervisor 1', 'username' => 'spv1', 'password' => Hash::make('password'), 'role' => 'supervisor'],
            ['name' => 'Pool Officer 1', 'username' => 'pool1', 'password' => Hash::make('password'), 'role' => 'pool-officer'],
            ['name' => 'Supervisor 2', 'username' => 'spv2', 'password' => Hash::make('password'), 'role' => 'supervisor'],
            ['name' => 'Pool Officer 2', 'username' => 'pool2', 'password' => Hash::make('password'), 'role' => 'pool-officer'],
            ['name' => 'Supervisor 3', 'username' => 'spv3', 'password' => Hash::make('password'), 'role' => 'supervisor'],
            ['name' => 'Pool Officer 3', 'username' => 'pool3', 'password' => Hash::make('password'), 'role' => 'pool-officer'],
        ];
        
        foreach ($users as $user) {
            User::create($user);
        }
    }
}