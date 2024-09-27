<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('notes')->insert([
            'title' => 'Cita con el Doctor 1',
            'content' => 'Para el dia 28/09/2024 tendras una cita con el Doc. Guilera',

        ]);

        DB::table('notes')->insert([
            'title' => 'Cita con el Doctor 2',
            'content' => 'Doc. Guilera no podra asistir este dia',

        ]);
    }
}
