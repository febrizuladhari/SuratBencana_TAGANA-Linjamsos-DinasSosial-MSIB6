<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Keluarga;
use Faker\Factory as Faker;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // \DB::table('keluargas');
        // $posts=[];

        $faker = Faker::create('id_ID');

        for ($i = 0; $i <= 20; $i++) {

            DB::table('keluargas')->insert([
                // 'no_kk' => $faker->unique()->numerify('#'), //Aselii Cuy
                'no_kk' => ($i+1),
                'alamat' => $faker->streetAddress(),
                'id_kelurahan' => $faker->numberBetween(1, 130),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        // \DB::table('keluargas')->insert($posts);
    }
}
