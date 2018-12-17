<?php

use Illuminate\Database\Seeder;

class StudioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('studios')->insert([
            'kapasitas' => 50,
        ]);
        DB::table('studios')->insert([
            'kapasitas' => 50,
        ]);
        DB::table('studios')->insert([
            'kapasitas' => 50,
        ]);
        DB::table('studios')->insert([
            'kapasitas' => 50,
        ]);
        DB::table('studios')->insert([
            'kapasitas' => 50,
        ]);
    }
}
