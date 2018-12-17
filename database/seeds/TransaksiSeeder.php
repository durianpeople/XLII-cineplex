<?php

use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaksis')->insert([
            'id_putar' => 1,
            'id_user' => 2,
            'jumlah tiket' => 10,
        ]);
        DB::table('transaksis')->insert([
            'id_putar' => 4,
            'id_user' => 2,
            'jumlah tiket' => 4,
        ]);
    }
}
