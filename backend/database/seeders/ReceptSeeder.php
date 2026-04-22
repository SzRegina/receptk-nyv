<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReceptSeeder extends Seeder
{
    
    public function run(): void
    {
        DB::table('receptek')->insert([
            [
                'nev' => 'Gulyásleves',
                'kat_id' => 2,
                'kep_eleresi_ut' => 'http://127.0.0.1:8000/kepek/klasszikus-gulyasleves-2-scaled-gn_-N2.jpg',
                'leiras' => 'Hagyományos magyar leves marhahússal, burgonyával és zöldségekkel.',
                'datum' => now()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nev' => 'Paradicsomleves',
                'kat_id' => 2,
                'kep_eleresi_ut' => 'http://127.0.0.1:8000/kepek/kremes-paradicsomleves-2-egyedi-scaled-lHVuAw.jpg',
                'leiras' => 'Egyszerű, sűrű paradicsomleves betűtésztával.',
                'datum' => now()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nev' => 'Rántott hús',
                'kat_id' => 1,
                'kep_eleresi_ut' => 'http://127.0.0.1:8000/kepek/husi.jpg',
                'leiras' => 'Panírozott sertéshús ropogós bundában, körettel tálalva.',
                'datum' => now()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nev' => 'Töltött káposzta',
                'kat_id' => 1,
                'kep_eleresi_ut' => 'http://127.0.0.1:8000/kepek/zsolti-fele-toltott-kaposzta-1-scaled-X8KqJx.jpg',
                'leiras' => 'Savanyú káposztával főtt, hússal töltött klasszikus magyar étel.',
                'datum' => now()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nev' => 'Caesar saláta',
                'kat_id' => 4,
                'kep_eleresi_ut' => 'http://127.0.0.1:8000/kepek/cezar-salata.jpg',
                'leiras' => 'Friss saláta csirkével, parmezánnal és krémes öntettel.',
                'datum' => now()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nev' => 'Görög saláta',
                'kat_id' => 4,
                'kep_eleresi_ut' => 'http://127.0.0.1:8000/kepek/egyszeru-gorog-salata-hu-c3BNI.jpg',
                'leiras' => 'Uborkából, paradicsomból, lilahagymából és fetából készült könnyű saláta.',
                'datum' => now()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nev' => 'Palacsinta',
                'kat_id' => 3,
                'kep_eleresi_ut' => 'http://127.0.0.1:8000/kepek/edes-palacsinta-alapteszta.jpg',
                'leiras' => 'Vékony tésztájú édesség kakaós vagy lekváros töltelékkel.',
                'datum' => now()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nev' => 'Somlói galuska',
                'kat_id' => 3,
                'kep_eleresi_ut' => 'http://127.0.0.1:8000/kepek/somloi.jpg',
                'leiras' => 'Piskótából, csokoládéöntetből, dióból és tejszínhabból álló desszert.',
                'datum' => now()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}