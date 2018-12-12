<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailPemutaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detil_pemutaran')->insert([
            'id_putar' => 'DP001',
            'id_studio' => 'S01',
            'id_film' => 'F0001',
            'jam_mulai' => '10:00:00',
            'jam_selesai' => '12:00:00',
            'harga_per_tiket' => '45000',
        ]);
    }
}