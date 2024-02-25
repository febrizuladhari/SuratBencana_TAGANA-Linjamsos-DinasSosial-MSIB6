<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kehamilan;

class KehamilanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kehamilan::create([
            'kehamilan' => 'Hamil',
        ]);

        Kehamilan::create([
            'kehamilan' => 'Tidak Hamil',
        ]);
    }
}
