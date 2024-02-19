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
            [
                'name' => 'Standard Room',
                'size' => 2,
                'price' => 350000,
                'description' => 'Kamar standar kami menawarkan kenyamanan yang sederhana namun menyenangkan dengan harga yang terjangkau. Setiap kamar dilengkapi dengan dua tempat tidur single berukuran 90×200, kamar mandi dengan shower, pemanas air, wastafel, dan lemari. Fasilitas lainnya mencakup AC dan TV. Kami juga menyediakan kopi, gula, teh, air mineral, serta peralatan mandi lengkap untuk memastikan kenyamanan Anda selama menginap.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Deluxe Room',
                'size' => 3,
                'price' => 450000,
                'description' => 'kami menawarkan pengalaman menginap yang istimewa dengan fasilitas yang lebih mewah. Setiap kamar dilengkapi dengan dispenser untuk kemudahan Anda. Tempat tidur yang nyaman, yang berukuran 200 x 200. Kamar mandi tipe kamar ini dilengkapi dengan shower, pemanas air, dan wastafel. AC dan TV juga tersedia di setiap kamar. Tentu saja, kami juga menyediakan kopi, gula, teh, air mineral, serta peralatan mandi lengkap untuk memenuhi kebutuhan Anda selama menginap.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Family Room',
                'size' => 4,
                'price' => 600000,
                'description' => 'Untuk pengalaman menginap bersama-sama, kami memiliki kamar keluarga yang nyaman dan luas. Fasilitas tambahan seperti dispenser, kulkas, dan meja makan disediakan untuk kebutuhan keluarga Anda. Kamar ini dilengkapi dengan satu tempat tidur single berukuran 90×200 dan satu tempat tidur king berukuran 200×200. Kamar mandinya dilengkapi dengan shower, pemanas air, wastafel, lemari, dan bahkan bak mandi. AC dan TV juga tersedia di setiap kamar. Kami juga menyediakan kopi, gula, teh, air mineral, serta peralatan mandi lengkap untuk kenyamanan Anda.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'VIP Room',
                'size' => 12,
                'price' => 1500000,
                'description' => 'VIP Room kami adalah pilihan terbaik untuk pengalaman menginap yang mewah dan eksklusif dengan harga Rp 1.500.000 per malam, memungkinkan Anda dan hingga 11 orang lainnya menikmati kemewahan dan kenyamanan yang tak tertandingi. Kamar ini dilengkapi dengan fasilitas premium seperti dispenser, magic jar, rak piring, alat makan, dapur lengkap, ruang tamu, microwave, dan kulkas. Dengan 2 kamar dan memiliki 12 tempat tidur single berukuran 90×200, setiap tamu dijamin mendapatkan tidur malam yang nyaman. Fasilitas kamar mandi mencakup shower, pemanas air, wastafel, dan lemari untuk menyimpan barang pribadi dengan aman. Selain itu, AC dan TV juga tersedia untuk kenyamanan tambahan. Seperti semua kamar kami, kami menyediakan kopi, gula, teh, air mineral, serta peralatan mandi lengkap. Dengan VIP Room kami, Anda akan mengalami penginapan yang tak terlupakan bagi Anda.',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        DB::table('rooms')->insert([
            'room_number' => '1',
            'type_id' => 1,
            'shower' => true,
            'waterheater' => true,
            'closet' => true,
            'ac' => true,
            'tv' => true,
            'single_bed' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('rooms')->insert([
            'room_number' => '2',
            'type_id' => 3,
            'dispenser' => true,
            'kulkas' => true,
            'meja_makan' => true,
            'shower' => true,
            'waterheater' => true,
            'wastafel' => true,
            'closet' => true,
            'bathtub' => true,
            'ac' => true,
            'tv' => true,
            'single_bed' => 1,
            'king_bed' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('rooms')->insert([
            'room_number' => '3',
            'type_id' => 2,
            'dispenser' => true,
            'shower' => true,
            'waterheater' => true,
            'wastafel' => true,
            'closet' => true,
            'ac' => true,
            'tv' => true,
            'king_bed' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('rooms')->insert([
            'room_number' => '4',
            'type_id' => 2,
            'dispenser' => true,
            'shower' => true,
            'waterheater' => true,
            'wastafel' => true,
            'closet' => true,
            'ac' => true,
            'tv' => true,
            'single_bed' => 1,
            'queen_bed' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('rooms')->insert([
            'room_number' => '5',
            'type_id' => 1,
            'shower' => true,
            'waterheater' => true,
            'closet' => true,
            'ac' => true,
            'tv' => true,
            'single_bed' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('rooms')->insert([
            'room_number' => '6',
            'type_id' => 1,
            'shower' => true,
            'waterheater' => true,
            'closet' => true,
            'ac' => true,
            'tv' => true,
            'single_bed' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('rooms')->insert([
            'room_number' => '7',
            'type_id' => 1,
            'shower' => true,
            'waterheater' => true,
            'closet' => true,
            'ac' => true,
            'tv' => true,
            'single_bed' => 2,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('rooms')->insert([
            'room_number' => '10',
            'type_id' => 2,
            'dispenser' => true,
            'shower' => true,
            'waterheater' => true,
            'closet' => true,
            'ac' => true,
            'tv' => true,
            'king_bed' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('rooms')->insert([
            'room_number' => '11',
            'type_id' => 2,
            'dispenser' => true,
            'shower' => true,
            'waterheater' => true,
            'wastafel' => true,
            'closet' => true,
            'ac' => true,
            'tv' => true,
            'single_bed' => 1,
            'queen_bed' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('rooms')->insert([
            'room_number' => '12',
            'type_id' => 3,
            'dispenser' => true,
            'kulkas' => true,
            'meja_makan' => true,
            'shower' => true,
            'waterheater' => true,
            'wastafel' => true,
            'closet' => true,
            'ac' => true,
            'tv' => true,
            'single_bed' => 1,
            'king_bed' => 1,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('rooms')->insert([
            'room_number' => 'VIP',
            'type_id' => 4,
            'dispenser' => true,
            'magic_jar' => true,
            'rak_piring' => true,
            'alat_makan' => true,
            'meja_makan' => true,
            'dapur' => true,
            'living_room' => true,
            'microwave' => true,
            'kulkas' => true,
            'shower' => true,
            'waterheater' => true,
            'wastafel' => true,
            'closet' => true,
            'ac' => true,
            'tv' => true,
            'single_bed' => 12,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('photos')->insert([
            ['name' => 'facility (1).jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'facility (2).jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'facility (3).jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'facility (4).jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'facility (5).jpg', 'created_at' => now(), 'updated_at' => now()],
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
            ['name' => 'nearby (1).jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'nearby (2).jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'nearby (3).jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'nearby (4).jpg', 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('type_photo')->insert([
            ['type_id' => 1, 'photo_id' => 6, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 1, 'photo_id' => 7, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 1, 'photo_id' => 8, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 1, 'photo_id' => 9, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 1, 'photo_id' => 10, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 1, 'photo_id' => 11, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 2, 'photo_id' => 12, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 2, 'photo_id' => 13, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 2, 'photo_id' => 14, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 2, 'photo_id' => 15, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 3, 'photo_id' => 16, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 3, 'photo_id' => 17, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 3, 'photo_id' => 18, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 3, 'photo_id' => 19, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 3, 'photo_id' => 20, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 4, 'photo_id' => 21, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 4, 'photo_id' => 22, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 4, 'photo_id' => 23, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 4, 'photo_id' => 24, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 4, 'photo_id' => 25, 'created_at' => now(), 'updated_at' => now()],
            ['type_id' => 4, 'photo_id' => 26, 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('reviews')->insert([
            [
                'name' => 'becca',
                'message' => 'Terima kasih atas layanan yang diberikan kpd saya,hotel yg sangat bersih,wangi,staff nya yang baik, kamar mandinya juga bersih, pokoknya best nanti bkl balik lg kesini',
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ranny S Rusdini',
                'message' => 'MasyaAllah penginapan yang bersih, layanan prima , pemilik yg ramah dan siap membantu... Semoga berkah usaha nya.',
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Deni Kurniawan',
                'message' => 'Ruangan nya bersih rapih wangi kualitas nya sangat bagus nggk nyesel deech nginep d Venesia hotel prak Sentul syariah sukses selalu..orang nya baik dan ramh² ...fasilitas nya lengkap ada kopi teh gula handuk selimut dll...d jamin betah deech...pokok nya endul sangat memuaskan',
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Fitri Nabila',
                'message' => 'Ruangannya bersih,pokoknya recomendasi banget dah👍pokoknya g rugi buat nginep d sni..Yg punya hotelnya ramah bgt lho👌kamar mandinya bersih bgt👌',
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Arvin Zulfikar',
                'message' => 'The VIP room is just perfect!
                Theres a big bedroom with 7 beds and a bedroom with 2 beds. Then, the living room is fit for gathering with your family. The bathroom and kitchen feels cozy too!',
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Rachmah Fathia Widyaniputri',
                'message' => 'Langsung dihandle sama owner-nya ternyata, dan ramah bgt.
                Family roomnya luas, Nyaman dan bersih, di luar kamar ada kitchen juga.
                Nyaman banget lah kalau mau staycation agak Lamaan.',
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Alfani Roosy Andinni',
                'message' => 'Tempatnya nyaman, harganya terjangkau. Pasti bakal balik lagi ke sini sih. 😍',
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Mila Apriani',
                'message' => 'Kamar rapi,bersih n wangi..pelayanan sangat memuaskan..lokasi yg mudah dicari',
                'rating' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);

        DB::table('users')->insert(['username' => 'admin', 'password' => Hash::make('password')]);

        DB::table('current_transactions')->insert([
            ['room_id' => 1, 'name' => 'Anisa Dewi', 'start_date' => '2024-02-18', 'end_date' => '2024-02-19'],
            ['room_id' => 1, 'name' => 'Rizky Pratama', 'start_date' => '2024-02-20', 'end_date' => '2024-02-21'],
            ['room_id' => 1, 'name' => 'Ria Novianti', 'start_date' => '2024-02-26', 'end_date' => '2024-02-28'],
            ['room_id' => 1, 'name' => 'Yoga Pratama', 'start_date' => '2024-02-29', 'end_date' => '2024-03-01'],
            ['room_id' => 2, 'name' => 'Siti Nurul Hidayah', 'start_date' => '2024-02-18', 'end_date' => '2024-02-19'],
            ['room_id' => 2, 'name' => 'Faisal Akbar', 'start_date' => '2024-02-19', 'end_date' => '2024-02-20'],
            ['room_id' => 3, 'name' => 'Nia Fitriani', 'start_date' => '2024-02-19', 'end_date' => '2024-02-22'],
            ['room_id' => 3, 'name' => 'Reza Maulana', 'start_date' => '2024-02-23', 'end_date' => '2024-02-25'],
            ['room_id' => 3, 'name' => 'Firman Prasetyo', 'start_date' => '2024-02-25', 'end_date' => '2024-02-27'],
            ['room_id' => 4, 'name' => 'Putri Anggraini', 'start_date' => '2024-02-19', 'end_date' => '2024-02-22'],
            ['room_id' => 4, 'name' => 'Ilham Wibowo', 'start_date' => '2024-02-22', 'end_date' => '2024-02-24'],
            ['room_id' => 4, 'name' => 'Irfan Setiawan', 'start_date' => '2024-02-24', 'end_date' => '2024-02-25'],
            ['room_id' => 5, 'name' => 'Dina Permata', 'start_date' => '2024-02-21', 'end_date' => '2024-02-24'],
            ['room_id' => 5, 'name' => 'Bayu Santoso', 'start_date' => '2024-02-24', 'end_date' => '2024-02-25'],
            ['room_id' => 5, 'name' => 'Diana Sari', 'start_date' => '2024-02-27', 'end_date' => '2024-02-29'],
            ['room_id' => 6, 'name' => 'Maya Puspita', 'start_date' => '2024-02-17', 'end_date' => '2024-02-18'],
            ['room_id' => 6, 'name' => 'Dedy Kurniawan', 'start_date' => '2024-02-19', 'end_date' => '2024-02-22'],
            ['room_id' => 6, 'name' => 'Robby Wijaya', 'start_date' => '2024-02-23', 'end_date' => '2024-02-25'],
            ['room_id' => 7, 'name' => 'Ayu Lestari', 'start_date' => '2024-02-18', 'end_date' => '2024-02-19'],
            ['room_id' => 7, 'name' => 'Arif Hidayat', 'start_date' => '2024-02-20', 'end_date' => '2024-02-23'],
            ['room_id' => 7, 'name' => 'Linda Permadi', 'start_date' => '2024-02-23', 'end_date' => '2024-02-24'],
            ['room_id' => 8, 'name' => 'Rini Wahyuni', 'start_date' => '2024-02-24', 'end_date' => '2024-02-25'],
            ['room_id' => 8, 'name' => 'Andi Saputra', 'start_date' => '2024-02-25', 'end_date' => '2024-02-27'],
            ['room_id' => 9, 'name' => 'Santi Wahyuni', 'start_date' => '2024-02-20', 'end_date' => '2024-02-22'],
            ['room_id' => 9, 'name' => 'Aditya Nugraha', 'start_date' => '2024-02-23', 'end_date' => '2024-02-29'],
            ['room_id' => 9, 'name' => 'Siska Agustiani', 'start_date' => '2024-03-01', 'end_date' => '2024-03-05'],
            ['room_id' => 10, 'name' => 'Yuni Susanti', 'start_date' => '2024-02-17', 'end_date' => '2024-02-20'],
            ['room_id' => 10, 'name' => 'Anita Fitri', 'start_date' => '2024-02-23', 'end_date' => '2024-02-25'],
            ['room_id' => 10, 'name' => 'Dharma Putra', 'start_date' => '2024-02-26', 'end_date' => '2024-02-29'],
            ['room_id' => 10, 'name' => 'Rudi Hermawan', 'start_date' => '2024-03-04', 'end_date' => '2024-03-08'],
            ['room_id' => 11, 'name' => 'Samsul Suseno', 'start_date' => '2024-02-27', 'end_date' => '2024-03-01'],
            ['room_id' => 11, 'name' => 'Budi Santoso', 'start_date' => '2024-03-04', 'end_date' => '2024-03-06'],
        ]);

        DB::table('past_transactions')->insert([
            ['room_id' => 1, 'name' => 'Lutfi Fahri', 'start_date' => '2024-02-01', 'end_date' => '2024-02-03', 'check_out_date' => '2024-02-03'],
            ['room_id' => 2, 'name' => 'Nanda Putri', 'start_date' => '2024-02-01', 'end_date' => '2024-02-02', 'check_out_date' => '2024-02-02'],
            ['room_id' => 3, 'name' => 'Rendra Prasetyo', 'start_date' => '2024-02-02', 'end_date' => '2024-02-05', 'check_out_date' => '2024-02-05'],
            ['room_id' => 1, 'name' => 'Yoga Wijaya', 'start_date' => '2024-02-03', 'end_date' => '2024-02-04', 'check_out_date' => '2024-02-04'],
            ['room_id' => 1, 'name' => 'Rini Septiani', 'start_date' => '2024-01-15', 'end_date' => '2024-01-18', 'check_out_date' => '2024-01-16'],
            ['room_id' => 1, 'name' => 'Agus Santoso', 'start_date' => '2024-01-25', 'end_date' => '2024-01-28', 'check_out_date' => '2024-01-28'],
            ['room_id' => 2, 'name' => 'Irfan Maulana', 'start_date' => '2024-01-10', 'end_date' => '2024-01-12', 'check_out_date' => '2024-01-12'],
            ['room_id' => 2, 'name' => 'Dian Pratiwi', 'start_date' => '2024-01-20', 'end_date' => '2024-01-22', 'check_out_date' => '2024-01-22'],
            ['room_id' => 3, 'name' => 'Novita Purnama', 'start_date' => '2024-01-05', 'end_date' => '2024-01-08', 'check_out_date' => '2024-01-08'],
            ['room_id' => 3, 'name' => 'Fajar Setiawan', 'start_date' => '2024-01-15', 'end_date' => '2024-01-18', 'check_out_date' => '2024-01-18'],
            ['room_id' => 4, 'name' => 'Novita Purnama', 'start_date' => '2024-01-10', 'end_date' => '2024-01-12', 'check_out_date' => '2024-01-12'],
            ['room_id' => 4, 'name' => 'Erna Susilo', 'start_date' => '2024-01-20', 'end_date' => '2024-01-22', 'check_out_date' => '2024-01-22'],
            ['room_id' => 5, 'name' => 'Siska Rahayu', 'start_date' => '2024-01-05', 'end_date' => '2024-01-08', 'check_out_date' => '2024-01-07'],
            ['room_id' => 5, 'name' => 'Iqbal Firdaus', 'start_date' => '2024-01-15', 'end_date' => '2024-01-18', 'check_out_date' => '2024-01-17'],
            ['room_id' => 6, 'name' => 'Novita Purnama', 'start_date' => '2024-01-10', 'end_date' => '2024-01-12', 'check_out_date' => '2024-01-12'],
            ['room_id' => 6, 'name' => 'Agus Santoso', 'start_date' => '2024-01-20', 'end_date' => '2024-01-22', 'check_out_date' => '2024-01-22'],
            ['room_id' => 7, 'name' => 'Wulan Sari', 'start_date' => '2024-01-05', 'end_date' => '2024-01-08', 'check_out_date' => '2024-01-08'],
            ['room_id' => 7, 'name' => 'Nanda Putri', 'start_date' => '2024-01-15', 'end_date' => '2024-01-18', 'check_out_date' => '2024-01-17'],
            ['room_id' => 8, 'name' => 'Rendra Prasetyo', 'start_date' => '2024-01-10', 'end_date' => '2024-01-12', 'check_out_date' => '2024-01-12'],
            ['room_id' => 8, 'name' => 'Farhan Ramadhan', 'start_date' => '2024-01-20', 'end_date' => '2024-01-22', 'check_out_date' => '2024-01-22'],
            ['room_id' => 9, 'name' => 'Reza Saputro', 'start_date' => '2024-01-05', 'end_date' => '2024-01-08', 'check_out_date' => '2024-01-06'],
            ['room_id' => 9, 'name' => 'Kota Suhadi', 'start_date' => '2024-01-15', 'end_date' => '2024-01-18', 'check_out_date' => '2024-01-18'],
            ['room_id' => 10, 'name' => 'Lina Permadi', 'start_date' => '2024-01-10', 'end_date' => '2024-01-12', 'check_out_date' => '2024-01-12'],
            ['room_id' => 10, 'name' => 'Hendra Kusuma', 'start_date' => '2024-01-20', 'end_date' => '2024-01-22', 'check_out_date' => '2024-01-22'],
        ]);
    }
}
