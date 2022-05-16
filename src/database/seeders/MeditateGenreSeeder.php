<?php

namespace Database\Seeders;

use App\Models\MeditateGenre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MeditateGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meditate_genre')->insert([
            'meditate_genre_name' => '静坐瞑想',
        ]);
            
        DB::table('meditate_genre')->insert([
            'meditate_genre_name' => 'ボディスキャン瞑想',
        ]);

        DB::table('meditate_genre')->insert([
            'meditate_genre_name' => 'マインドフルネスヨーガ',
        ]);
    }
}
