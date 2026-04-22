<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriaSeeder extends Seeder
{
    
    public function run(): void
    {
        DB::table('kategoriak')->insert([
            [
                'id' => 1,
                'nev' => 'főétel',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'nev' => 'leves',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'nev' => 'édesség',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'nev' => 'saláta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}