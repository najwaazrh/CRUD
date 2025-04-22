<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Anggota;

class DatabaseSeeder extends Seeder
{
    public function run(): void 
    {
        Anggota::create([
            'nama' => 'Najwa Az Zahroh',
            'hp' => '088812701270',
        ]);
        Anggota::create([
            'nama' => 'Adinda Sela Sapitri',
            'hp' => '088825112000',
        ]);
        Anggota::create([
            'nama' => 'Rania Putri Mahadirka',
            'hp' => '0888899996666',
        ]);

    }
}
