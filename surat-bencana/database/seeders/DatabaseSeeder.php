<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Identitas;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            KecamatanSeeder::class,
        ]);
        $this->call([
            KelurahanSeeder::class,
        ]);
        $this->call([
            KeluargaSeeder::class,
        ]);
        $this->call([
            BencanaSeeder::class,
        ]);
        $this->call([
            BantuanSeeder::class,
        ]);
        $this->call([
            IdentitasSeeder::class,
        ]);
        $this->call([
            UserSeeder::class,
        ]);
        $this->call([
            DetailBantuanSeeder::class,
        ]);

    }
}
