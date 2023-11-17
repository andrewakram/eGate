<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!User::where('phone', '123456789')->first()) {
            User::create([
                'name' => 'customer 1',
                'phone' => '123456789',
                'email' => 'user@gmail.com',
                'password' => '123456',
                'email_verified_at' => Carbon::now(),
            ]);
        }
    }
}
