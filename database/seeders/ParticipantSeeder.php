<?php

namespace Database\Seeders;

use App\Models\Participant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Participant::create([
            'nama' => 'Nama Teman 1',
            'nohp' => '081200010001',
        ]);
        Participant::create([
            'nama' => 'Nama Teman 2',
            'nohp' => '081200010002',
        ]);
        Participant::create([
            'nama' => 'Nama Teman 3',
            'nohp' => '081200010003',
        ]);
        Participant::create([
            'nama' => 'Nama Teman 4',
            'nohp' => '081200010004',
        ]);
    }
}
