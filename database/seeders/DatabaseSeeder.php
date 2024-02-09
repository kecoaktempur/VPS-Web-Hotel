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
            ['name' => 'VIP Room', 'size' => 4, 'price' => 300000, 'description' => 'Untuk 4 orang, 2 buah 2in1 bed ukuran 90x20', 'created_at' => now(), 'updated_at' => now()]
        ]);

        DB::table('photos')->insert([
            ['name' => 'standard (1).jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'standard (2).jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'standard (3).jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'standard (4).jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'standard (5).jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'standard (6).jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'deluxe (1).jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'deluxe (2).jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'deluxe (3).jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'deluxe (4).jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'family (1).jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'family (2).jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'family (3).jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'family (4).jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'family (5).jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'vip (1).jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'vip (2).jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'vip (3).jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'vip (4).jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'vip (5).jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'vip (6).jpg', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('type_photo')->insert([
            ['type_id' => 1, 'photo_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 1, 'photo_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 1, 'photo_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 1, 'photo_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 1, 'photo_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 1, 'photo_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 2, 'photo_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 2, 'photo_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 2, 'photo_id' => 9, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 2, 'photo_id' => 10, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 3, 'photo_id' => 11, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 3, 'photo_id' => 12, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 3, 'photo_id' => 13, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 3, 'photo_id' => 14, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 3, 'photo_id' => 15, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 4, 'photo_id' => 16, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 4, 'photo_id' => 17, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 4, 'photo_id' => 18, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 4, 'photo_id' => 19, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 4, 'photo_id' => 20, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 4, 'photo_id' => 21, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
