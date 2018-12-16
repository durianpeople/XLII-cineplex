<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            'nama_genre' => 'Action',
        ]);
        DB::table('genres')->insert([
            'nama_genre' => 'Animation',
        ]);
        DB::table('genres')->insert([
            'nama_genre' => 'Adventure',
        ]);
        DB::table('genres')->insert([
            'nama_genre' => 'Comedy',
        ]);
        DB::table('genres')->insert([
            'nama_genre' => 'Family',
        ]);
        DB::table('genres')->insert([
            'nama_genre' => 'Drama',
        ]);
        DB::table('genres')->insert([
            'nama_genre' => 'Fantasy',
        ]);
        DB::table('genres')->insert([
            'nama_genre' => 'Thriller',
        ]);
        DB::table('genres')->insert([
            'nama_genre' => 'Horror',
        ]);
    }
}
