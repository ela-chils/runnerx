<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kota;
use App\Models\JenisEvent;

class MasterDataSeeder extends Seeder
{
    public function run(): void
    {
        // Master Data Kota
        Kota::insert([
            [
                'nama_kota' => 'Jakarta'
            ],
            [
                'nama_kota' => 'Yogyakarta'
            ],
            [
                'nama_kota' => 'Semarang'
            ],
            [
                'nama_kota' => 'Probolinggo'
            ],
        ]);


        // Master Data Jenis Event
        JenisEvent::insert([
            [
                'nama_jenis' => '3K'
            ],
            [
                'nama_jenis' => '5K'
            ],
            [
                'nama_jenis' => '10K'
            ],
            [
                'nama_jenis' => 'Half Marathon'
            ],
            [
                'nama_jenis' => 'Full Marathon'
            ],
        ]);
    }
}