<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieCountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movie_country')->insert([
            'movie_id' => mt_rand(1,6),
            'country_id' => mt_rand(1,23)
        ]);
    }
}
