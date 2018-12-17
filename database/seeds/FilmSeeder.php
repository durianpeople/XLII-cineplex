<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->insert([
            'nama_film' => 'AQUAMAN',
            'tahun_pembuatan' => '2018',
            'durasi' => '113',
        ]);
        DB::table('films')->insert([
            'nama_film' => 'Ralph Breaks The Internet',
            'tahun_pembuatan' => '2018',
            'durasi' => '116',
        ]);
        DB::table('films')->insert([
            'nama_film' => 'Robin Hood',
            'tahun_pembuatan' => '2018',
            'durasi' => '116',
        ]);
        DB::table('films')->insert([
            'nama_film' => 'Fantastic Beasts: The Crimes of the Grinderwald',
            'tahun_pembuatan' => '2018',
            'durasi' => '103',
        ]);
        DB::table('films')->insert([
            'nama_film' => 'Hanum dan Rangga',
            'tahun_pembuatan' => '2018',
            'durasi' => '90',
        ]);
        DB::table('films')->insert([
            'nama_film' => 'How to Train Your Dragon: The Hidden World',
            'tahun_pembuatan' => '2019',
            'durasi' => NULL,
        ]);
        DB::table('films')->insert([
            'nama_film' => 'The Lego Movie Sequel',
            'tahun_pembuatan' => '2019',
            'durasi' => NULL,
        ]);
    }
}