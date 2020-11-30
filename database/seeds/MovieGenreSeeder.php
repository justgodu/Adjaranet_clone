<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movie_genre')->insert([
            'movie_id' => mt_rand(1,6),
            'genre_id' => mt_rand(1,10),
        ]);
    }
}
