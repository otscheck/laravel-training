<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userRole = Role::create(['name'=>'user']);
        $adminRole = Role::create(['name'=>'admin']);

        User::create([
            'name'=>'Admin',
            'email'=>'admin@email.com',
            'password'=>bcrypt('password'),
            'email_verified_at'=>now(),
            'role_id'=>$adminRole->id,
        ]);
    }
}
