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
            'nama' => 'Agus Susanto',
            'nohp' => '085392019252',
        ]);
        Participant::create([
            'nama' => 'Patris',
            'nohp' => '081200010002',
        ]);
        Participant::create([
            'nama' => 'Rian',
            'nohp' => '081200010003',
        ]);
        Participant::create([
            'nama' => 'Yunus',
            'nohp' => '081200010004',
        ]);
    }
}
