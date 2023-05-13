<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Location::create([
            'nama' => 'TPS001',
            'alamat' => 'Alamat TPS 1',
        ]);
        Location::create([
            'nama' => 'TPS002',
            'alamat' => 'Alamat TPS 2',
        ]);
        Location::create([
            'nama' => 'TPS003',
            'alamat' => 'Alamat TPS 3',
        ]);
    }
}
