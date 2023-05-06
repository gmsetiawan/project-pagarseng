<?php

namespace Database\Seeders;

use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KabupatenKecamatanKelurahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kabupaten = Kabupaten::create(['nama' => 'Berau']);

        $kecamatan = Kecamatan::create(['kabupaten_id' => $kabupaten->id, 'nama' => 'Batu Putih']);

        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Ampen Medang']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Balikukup']);

        $kecamatan = Kecamatan::create(['kabupaten_id' => $kabupaten->id, 'nama' => 'Biatan']);

        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Biatan Bapinang']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Biatan Baru']);
    }
}
