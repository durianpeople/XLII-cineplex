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
            'id_film' => 'F0001',
            'nama_film' => 'AQUAMAN',
            'tahun_pembuatan' => '2018',
            'durasi' => '113',
            'image' => 'Aquaman.jpg',
        ]);
        DB::table('films')->insert([
            'id_film' => 'F0002',
            'nama_film' => 'Ralph Breaks The Internet',
            'tahun_pembuatan' => '2018',
            'durasi' => '116',
            'image' => 'Ralph.jpg',
        ]);
        DB::table('films')->insert([
            'id_film' => 'F0003',
            'nama_film' => 'Robin Hood',
            'tahun_pembuatan' => '2018',
            'durasi' => '116',
            'image' => 'robin.jpg',
        ]);
        DB::table('films')->insert([
            'id_film' => 'F0004',
            'nama_film' => 'Fantastic Beasts: The Crimes of the Grinderwald',
            'tahun_pembuatan' => '2018',
            'durasi' => '103',
            'image' => 'fantastic.jpg',
        ]);
        DB::table('films')->insert([
            'id_film' => 'F0005',
            'nama_film' => 'Hanum dan Rangga',
            'tahun_pembuatan' => '2018',
            'durasi' => '90',
            'image' => 'hanum.jpg',
        ]);
    }
}