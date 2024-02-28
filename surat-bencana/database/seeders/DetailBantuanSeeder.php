<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Bantuan;
use Faker\Factory as Faker;

class DetailBantuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i <= 150; $i++) {

            DB::table('detail_bantuans')->insert([
                'deskripsi' => $faker->sentence(3),
                'jumlah' => $faker->numberBetween(1, 10),
                'id_bantuan' => $faker->numberBetween(1, 70),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
