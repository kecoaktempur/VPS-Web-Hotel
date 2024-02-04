<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('types')->insert([
            ['name' => 'Standard Room', 'size' => 2, 'price' => 250000, 'description' => 'Untuk 2 orang, 2 single bed ukuran 90x200, kebersihan kami jaga dengan mengganti sprei setiap hari, membersihkan kamar setiap hari. Tersedia kopi, gula, teh, air mineral, peralatan mandi yang lengkap di setiap kamarnya', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Deluxe Room', 'size' => 3, 'price' => 400000, 'description' => 'Untuk 2-3 orang, kebersihan kami jaga dengan mengganti sprei setiap hari, membersihkan kamar setiap hari. Tersedia kopi, gula, teh, air mineral, peralatan mandi yang lengkap di setiap kamarnya', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Family Room', 'size' => 4, 'price' => 500000, 'description' => 'Untuk 3-4 orang, tersedia 2 bed dengan ukuran 200x200 dan 180x200, kebersihan kami jaga dengan mengganti sprei setiap hari, membersihkan kamar setiap hari. tersedia kopi, gula, teh, air mineral, peralatan mandi yang lengkap di setiap kamarnya', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kamar Dengan Kamar Mandi Luar (Room 15, 16)', 'size' => 4, 'price' => 300000, 'description' => 'Untuk 4 orang, 2 buah 2in1 bed ukuran 90x20', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kamar Dengan Kamar Mandi Luar (Room 17)', 'size' => 2, 'price' => 200000, 'description' => 'Untuk 2 orang, 1 buah 2in1 bed ukuran 120x200', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kamar Dengan Kamar Mandi Luar (Room 18)', 'size' => 3, 'price' => 200000, 'description' => 'Untuk 3 orang, 2 buah 2in1 bed ukuran 90x200', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kamar Dengan Kamar Mandi Luar (Room 19)', 'size' => 6, 'price' => 200000, 'description' => 'Untuk 6 orang, 3 buah 2in1 bed ukuran 90x200', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
