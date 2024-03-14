<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Bantuan;
use Faker\Factory as Faker;

class BantuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run()
    {
        // \DB::table('bantuans');
        // $posts=[];

        $bantuan = ['Paket Sandang', 'Buffer Stock', 'Permakanan', 'Bansos'];
        $faker = Faker::create('id_ID');

        for ($i = 0; $i <= 150; $i++) {

            DB::table('bantuans')->insert([
                'jns_bantuan' => $faker->randomElement($bantuan),
                'id_bencana' => $faker->numberBetween(1, 80),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        // \DB::table('bantuans')->insert($posts);
    }
}
