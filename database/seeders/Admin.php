<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Creating User Admin 
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => 'password', //Leave it empty for now
            'email_verified_at' => now(),
            // 'password' => static::$password ??= Hash::make('password'),
            // Might switch to Hashing 
            'remember_token' => Str::random(10),
            'is_admin' => 1
        ]); 
    }
}
