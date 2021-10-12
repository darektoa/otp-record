<?php

namespace Database\Seeders;

use App\Models\OtpNumber;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class
        ]);

        OtpNumber::factory()->count(50)->create();
        // \App\Models\User::factory(10)->create();
    }
}
