<?php

namespace Database\Seeders;

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
        Support::create([
            'parent_id'             => null,
            'nik'                   => '1234567890000001',
            'nama'                  => 'Nama 1',
            'alamat'                => 'Jl. Alamat 1',
            'rt'                    => '1',
            'kabupaten_id'          => 1,
            'kecamatan_id'          => 1,
            'kelurahan_id'          => 1,
            'scanktp'               => 'example.jpg',
            'nohp'                  => '081200010001',
            'keterangan'            => null,
            'rating'                => 5,
            'location_id'           => null,
            'participant_id'        => 1,
            'user_id'               => 1,
        ]);
        Support::create([
            'parent_id'             => null,
            'nik'                   => '1234567890000002',
            'nama'                  => 'Nama 2',
            'alamat'                => 'Jl. Alamat 2',
            'rt'                    => '1',
            'kabupaten_id'          => 1,
            'kecamatan_id'          => 1,
            'kelurahan_id'          => 1,
            'scanktp'               => 'example.jpg',
            'nohp'                  => '081200010002',
            'keterangan'            => null,
            'rating'                => 5,
            'location_id'           => null,
            'participant_id'        => 2,
            'user_id'               => 1,
        ]);
        Support::create([
            'parent_id'             => null,
            'nik'                   => '1234567890000003',
            'nama'                  => 'Nama 3',
            'alamat'                => 'Jl. Alamat 3',
            'rt'                    => '1',
            'kabupaten_id'          => 1,
            'kecamatan_id'          => 1,
            'kelurahan_id'          => 2,
            'scanktp'               => 'example.jpg',
            'nohp'                  => '081200010003',
            'keterangan'            => null,
            'rating'                => 5,
            'location_id'           => null,
            'participant_id'        => 3,
            'user_id'               => 1,
        ]);
        Support::create([
            'parent_id'             => null,
            'nik'                   => '1234567890000004',
            'nama'                  => 'Nama 4',
            'alamat'                => 'Jl. Alamat 4',
            'rt'                    => '4',
            'kabupaten_id'          => 1,
            'kecamatan_id'          => 2,
            'kelurahan_id'          => 3,
            'scanktp'               => 'example.jpg',
            'nohp'                  => '081200010004',
            'keterangan'            => null,
            'rating'                => 4,
            'location_id'           => null,
            'participant_id'        => 4,
            'user_id'               => 1,
        ]);
        Support::create([
            'parent_id'             => null,
            'nik'                   => '1234567890000005',
            'nama'                  => 'Nama 5',
            'alamat'                => 'Jl. Alamat 5',
            'rt'                    => '4',
            'kabupaten_id'          => 1,
            'kecamatan_id'          => 2,
            'kelurahan_id'          => 3,
            'scanktp'               => 'example.jpg',
            'nohp'                  => '081200010005',
            'keterangan'            => null,
            'rating'                => 4,
            'location_id'           => null,
            'participant_id'        => 1,
            'user_id'               => 1,
        ]);
        Support::create([
            'parent_id'             => null,
            'nik'                   => '1234567890000006',
            'nama'                  => 'Nama 6',
            'alamat'                => 'Jl. Alamat 6',
            'rt'                    => '4',
            'kabupaten_id'          => 1,
            'kecamatan_id'          => 2,
            'kelurahan_id'          => 4,
            'scanktp'               => 'example.jpg',
            'nohp'                  => '081200010006',
            'keterangan'            => null,
            'rating'                => 4,
            'location_id'           => null,
            'participant_id'        => 2,
            'user_id'               => 2,
        ]);
    }
}
