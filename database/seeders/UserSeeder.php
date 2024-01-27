<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory()->create(['email' => 'pparker@gmail.com']);
        UserProfile::factory()->create(['first_name' => 'Peter', 'last_name' => 'Parker', 'user_id' => $user->id]);
    }
}
