<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('drivers')->insert([
            [
                'first_name' => Str::random(10),
                'middle_name'  => Str::random(10),
                'last_name'  => Str::random(10),
            ],
            [
                'first_name' => Str::random(10),
                'middle_name'  => Str::random(10),
                'last_name'  => Str::random(10),
            ],
            [
                'first_name' => Str::random(10),
                'middle_name'  => Str::random(10),
                'last_name'  => Str::random(10),
            ],
        ]);

        DB::table('orders')->insert([
            [
                'driver_id' => 1,
                'from'  => Str::random(15),
                'to'  => Str::random(15),
            ],
            [
                'driver_id' => 2,
                'from'  => Str::random(15),
                'to'  => Str::random(15),
            ],
            [
                'driver_id' => 3,
                'from'  => Str::random(15),
                'to'  => Str::random(15),
            ],
        ]);
    }
}
