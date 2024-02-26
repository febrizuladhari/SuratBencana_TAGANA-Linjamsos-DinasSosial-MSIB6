<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Identitas;
use Faker\Factory as Faker;

class IdentitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // \DB::table('identitas');
        // $posts=[];

        $status = ['Kepala Keluarga', 'Istri', 'Anak', 'Anggota Lain'];
        $jns_kelamin = ['Laki-Laki', 'Perempuan'];
        $kehamilan = ['Hamil', 'Tidak Hamil'];

        $faker = Faker::create('id_ID');

        for ($i = 0; $i <= 98; $i++) {

            DB::table('identitas')->insert([
                'nik' => $faker->unique()->numerify('################'),
                'nama' => $faker->name(),
                'status' => $faker->randomElement($status),
                'usia' => $faker->numberBetween(1, 100),
                'jns_kelamin' => $faker->randomElement($jns_kelamin),
                'kehamilan' => $faker->randomElement($kehamilan),
                // 'no_kk' => $faker->unique()->numerify('#'), //Aselii Cuy
                'no_kk' => $faker->numberBetween(1, 19),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        // \DB::table('identitas')->insert($posts);
    }
}
