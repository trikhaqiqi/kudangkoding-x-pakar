<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@kudangkoding.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Kudangkoding321'),
            'remember_token' => Str::random(10)
        ]);
        $admin->assignRole('admin');
        $admin->admin()->create([
            'user_id' => $admin->id
        ]);

        $expert = User::create([
            'name' => 'Mr. Pakar',
            'email' => 'pakar@kudangkoding.com',
            'email_verified_at' => now(),
            'password' => bcrypt('Kudangkoding321'),
            'remember_token' => Str::random(10)
        ]);
        $expert->assignRole('expert');
        $expert->expert()->create([
            'position' => 'Psikolog',
            'company' => 'Kudang Koding',
            'user_id' => $expert->id
        ]);

        $user = User::create([
            'name' => "M. Ilyas Tri Khaqiqi",
            'email' => "trikhaqiqi@gmail.com",
            'email_verified_at' => now(),
            'password' => bcrypt('Kudangkoding321'),
            'remember_token' => Str::random(10),
        ]);
        $user->assignRole('user');
        $user->userProfile()->create([
            'gender' => 'male',
            'age' => 21,
            'user_id' => $user->id
        ]);
    }
}
