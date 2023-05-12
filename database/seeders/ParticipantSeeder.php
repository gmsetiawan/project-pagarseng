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
            'nama' => 'Puyan',
            'nohp' => '081200010001',
        ]);
        Participant::create([
            'nama' => 'Aco',
            'nohp' => '081200020002',
        ]);
    }
}
