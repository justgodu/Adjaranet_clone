<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'movie_id' => mt_rand(1,8),
            'user_id' => mt_rand(1,5),
            'content' => Str::random(60)
        ]);
    }
}
