<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bantuan;

class BantuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bantuan::create([
            'jns_bantuan' => 'Paket Sandang',
        ]);

        Bantuan::create([
            'jns_bantuan' => 'Buffer Stock',
        ]);

        Bantuan::create([
            'jns_bantuan' => 'Permakanan',
        ]);

        Bantuan::create([
            'jns_bantuan' => 'Bansos',
        ]);
    }
}
