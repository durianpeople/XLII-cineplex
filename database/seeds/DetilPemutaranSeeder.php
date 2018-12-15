<?php

use Illuminate\Database\Seeder;

class DetilPemutaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detil_pemutarans')->insert([
            'id_studio' => 1,
            'id_film' => 1,
            'jam_mulai' => '10:00:00',
            'jam_selesai' => '12:00:00',
            'harga_per_tiket' => '45000',
        ]);
    }
}
