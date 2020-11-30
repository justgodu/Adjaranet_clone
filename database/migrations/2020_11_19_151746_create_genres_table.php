<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });

        DB::table('genres')->insert(
            array(
                'name' => 'ანიმაციური'
            )
        );
        DB::table('genres')->insert(
            array(
                'name' => 'ბიოგრაფიული'
            )
        );
        DB::table('genres')->insert(
            array(
                'name' => 'დეტექტივი'
            )
        );
        DB::table('genres')->insert(
            array(
                'name' => 'დოკიმენტური'
            )
        );
        DB::table('genres')->insert(
            array(
                'name' => 'დრამა'
            )
        );
        DB::table('genres')->insert(
            array(
                'name' => 'ვესტერნი'
            )
        );
        DB::table('genres')->insert(
            array(
                'name' => 'ისტორიული'
            )
        );
        DB::table('genres')->insert(
            array(
                'name' => 'კომედია'
            )
        );
        DB::table('genres')->insert(
            array(
                'name' => 'მელოდრამა'
            )
        );
        DB::table('genres')->insert(
            array(
                'name' => 'მიუზიკლი'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genres');
    }
}
