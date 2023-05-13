<?php

namespace Database\Seeders;

use App\Models\Kabupaten;
use App\Models\Support;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $supportCount = 500;

        Support::factory($supportCount)->create()->each(function ($support) {
            $kabupaten = Kabupaten::inRandomOrder()->first();
            $kecamatan = $kabupaten->kecamatans()->inRandomOrder()->first();
            $kelurahan = $kecamatan->kelurahans()->inRandomOrder()->first();

            $support->kabupaten()->associate($kabupaten);
            $support->kecamatan()->associate($kecamatan);
            $support->kelurahan()->associate($kelurahan);

            $support->save();
        });
    }
}
