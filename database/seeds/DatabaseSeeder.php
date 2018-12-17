<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            FilmSeeder::class,
            DetilPemutaranSeeder::class,
            GenreSeeder::class,
            FilmGenreSeeder::class,
            TransaksiSeeder::class,
            StudioSeeder::class,
        ]);
    }
}
