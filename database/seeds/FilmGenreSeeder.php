<?php

use Illuminate\Database\Seeder;

class FilmGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('film_genres')->insert([
            'id_film' => 1,
            'id_genre' => 1,
        ]);
        DB::table('film_genres')->insert([
            'id_film' => 1,
            'id_genre' => 3,
        ]);
        DB::table('film_genres')->insert([
            'id_film' => 1,
            'id_genre' => 7,
        ]);
        DB::table('film_genres')->insert([
            'id_film' => 2,
            'id_genre' => 2,
        ]);
        DB::table('film_genres')->insert([
            'id_film' => 2,
            'id_genre' => 3,
        ]);
        DB::table('film_genres')->insert([
            'id_film' => 2,
            'id_genre' => 4,
        ]);
        DB::table('film_genres')->insert([
            'id_film' => 3,
            'id_genre' => 1,
        ]);
        DB::table('film_genres')->insert([
            'id_film' => 3,
            'id_genre' => 3,
        ]);
        DB::table('film_genres')->insert([
            'id_film' => 4,
            'id_genre' => 3,
        ]);
        DB::table('film_genres')->insert([
            'id_film' => 4,
            'id_genre' => 5,
        ]);
        DB::table('film_genres')->insert([
            'id_film' => 4,
            'id_genre' => 7,
        ]);
        DB::table('film_genres')->insert([
            'id_film' => 5,
            'id_genre' => 6,
        ]);
    }
}
