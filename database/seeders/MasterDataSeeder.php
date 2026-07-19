<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kota;
use App\Models\JenisEvent;

class MasterDataSeeder extends Seeder
{
    public function run(): void
    {
        $kotas = [
            'Jakarta',
            'Yogyakarta',
            'Semarang',
            'Probolinggo',
        ];

        foreach ($kotas as $kota) {
            Kota::firstOrCreate([
                'nama_kota' => $kota,
            ]);
        }

        $jenisEvents = [
            '3K',
            '5K',
            '10K',
            'Half Marathon',
            'Full Marathon',
        ];

        foreach ($jenisEvents as $jenis) {
            JenisEvent::firstOrCreate([
                'nama_jenis' => $jenis,
            ]);
        }
    }
}