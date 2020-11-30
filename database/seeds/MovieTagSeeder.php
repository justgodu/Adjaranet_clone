<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MovieTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movie_tag')->insert([
            'movie_id' => mt_rand(1,8),
            'tag_id' => mt_rand(1,5)
        ]);
    }
}
