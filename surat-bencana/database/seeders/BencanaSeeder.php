<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Bencana;
use Faker\Factory as Faker;

class BencanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // \DB::table('bencanas');
        // $posts=[];

        $bencana = ['Kebakaran', 'Banjir', 'Tanah Longsor', 'Badai', 'Gempa Bumi', 'Tsunami', 'Gunung Meletus', 'Puting Beliung'];
        $startDate = '2018-01-01';
        $endDate = '2023-03-01';

        $faker = Faker::create('id_ID');

        for ($i = 0; $i <= 80; $i++) {

            DB::table('bencanas')->insert([
                'jns_bencana' => $faker->randomElement($bencana),
                'id_keluarga' => $faker->numberBetween(1, 20),
                'tanggal_bencana' => $faker->dateTimeBetween($startDate, $endDate)->format('Y-m-d'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        // \DB::table('bencanas')->insert($posts);
    }
}
