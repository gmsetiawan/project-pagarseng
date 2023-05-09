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
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Batu Putih']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Kayu Indah']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Lobang Kelatak']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Sumber Agung']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Tembudan']);

        $kecamatan = Kecamatan::create(['kabupaten_id' => $kabupaten->id, 'nama' => 'Biatan']);

        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Biatan Bapinang']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Biatan Baru']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Biatan Ilir']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Biatan Lempake']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Biatan Ulu']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Bukit Makmur Jaya']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Karangan']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Manunggal Jaya']);

        $kecamatan = Kecamatan::create(['kabupaten_id' => $kabupaten->id, 'nama' => 'Biduk-Biduk']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Biduk-Biduk']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Giring-Giring']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Pantai Harapan']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Tanjung Perepat']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Teluk Sulaiman']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Teluk Sumbang']);

        $kecamatan = Kecamatan::create(['kabupaten_id' => $kabupaten->id, 'nama' => 'Gunung Tabur']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Batu-Batu']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Birang']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Gunung Tabur']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Maluang']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Melati Jaya']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Merancang Ilir']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Merancang Ulu']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Pulau Besing']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Sambakungan']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Samburakat']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Tasuk']);

        $kecamatan = Kecamatan::create(['kabupaten_id' => $kabupaten->id, 'nama' => 'Kelay']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Lesan Dayak']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Long Beliu']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Long Duhung']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Long Keluh']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Long Lamcin']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Long Pelay']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Long Sului']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Mapulu']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Merabu']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Merapun']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Merasa']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Muara Lesan']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Panaan']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Sido Bangen']);

        $kecamatan = Kecamatan::create(['kabupaten_id' => $kabupaten->id, 'nama' => 'Maratua']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Bohesilian']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Payung-Payung']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Teluk Alulu']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Teluk Harapan']);

        $kecamatan = Kecamatan::create(['kabupaten_id' => $kabupaten->id, 'nama' => 'Pulau Derawan']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Kasai']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Pegat Betumbuk']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Pulau Derawan']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Tanjung Batu']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Teluk Semanting']);

        $kecamatan = Kecamatan::create(['kabupaten_id' => $kabupaten->id, 'nama' => 'Sambaliung']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Bebanir']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Bena Baru']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Gurimbang']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Inaran']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Long Lanuk']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Pegat Bukur']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Pesayan']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Pilanjau']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Rantau Panjang']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Sambaliung']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Suaran']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Sukan Tengah']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Tanjung Perangat']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Tumbit Dayak']);

        $kecamatan = Kecamatan::create(['kabupaten_id' => $kabupaten->id, 'nama' => 'Segah']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Batu Rajang']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Bukit Makmur']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Gunung Sari']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Harapan Jaya']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Long Ayan']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Long Ayap']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Long Laai']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Pandan Sari']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Punan Mahakam']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Punan Malinau']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Punan Segah']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Siduung Indah']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Tepian Buah']);

        $kecamatan = Kecamatan::create(['kabupaten_id' => $kabupaten->id, 'nama' => 'Tabalar']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Buyung Buyung']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Harapan Maju']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Semurut']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Tabalar Muara']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Tabalar Ulu']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Tubaan']);

        $kecamatan = Kecamatan::create(['kabupaten_id' => $kabupaten->id, 'nama' => 'Talisayan']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Bumi Jaya']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Campur Sari']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Capuak']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Dumaring']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Eka Sapta']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Purnasari Jaya']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Suka Murya']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Sumber Mulya']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Talisayan']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Tunggal Bumi']);

        $kecamatan = Kecamatan::create(['kabupaten_id' => $kabupaten->id, 'nama' => 'Tanjung Redeb']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Bugis']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Gayam']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Gunung Panjang']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Karang Ambun']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Sungai Bedungun']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Tanjung Redeb']);

        $kecamatan = Kecamatan::create(['kabupaten_id' => $kabupaten->id, 'nama' => 'Teluk Bayur']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Labanan Jaya']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Labanan Makarti']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Labanan Makmur']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Rinding']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Tumbit Melayu']);
        Kelurahan::create(['kecamatan_id' => $kecamatan->id, 'nama' => 'Teluk Bayur']);
    }
}
