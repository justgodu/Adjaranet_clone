<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });
        DB::table('countries')->insert(
            array(
                'name' => 'აშშ'
            )
        );

        DB::table('countries')->insert(
            array(
                'name' => 'საფრანგეთი'
            )
        );

        DB::table('countries')->insert(
            array(
                'name' => 'დიდი ბრიტანეთი'
            )
        );

        DB::table('countries')->insert(
            array(
                'name' => 'კანადა'
            )
        );

        DB::table('countries')->insert(
            array(
                'name' => 'იტალია'
            )
        );
        DB::table('countries')->insert(
            array(
                'name' => 'იაპონია'
            )
        );
        DB::table('countries')->insert(
            array(
                'name' => 'გერმანია'
            )
        );
        DB::table('countries')->insert(
            array(
                'name' => 'ესპანეთი'
            )
        );
        DB::table('countries')->insert(
            array(
                'name' => 'რუსეთი'
            )
        );
        DB::table('countries')->insert(
            array(
                'name' => 'ინდოეთი'
            )
        );
        DB::table('countries')->insert(
            array(
                'name' => 'ავსტრალია'
            )
        );
        DB::table('countries')->insert(
            array(
                'name' => 'დასავლეთ გერმანია'
            )
        );
        DB::table('countries')->insert(
            array(
                'name' => 'ჰონკონგი'
            )
        );
        DB::table('countries')->insert(
            array(
                'name' => 'შვედეთი'
            )
        );
        DB::table('countries')->insert(
            array(
                'name' => 'ბელგია'
            )
        );
        DB::table('countries')->insert(
            array(
                'name' => 'სამხრეთ კორეა'
            )
        );
        DB::table('countries')->insert(
            array(
                'name' => 'ნიდერლანდი'
            )
        );
        DB::table('countries')->insert(
            array(
                'name' => 'მექსიკა'
            )
        );
        DB::table('countries')->insert(
            array(
                'name' => 'შვეიცარია'
            )
        );
        DB::table('countries')->insert(
            array(
                'name' => 'ჩინეთი'
            )
        );
        DB::table('countries')->insert(
            array(
                'name' => 'დანია'
            )
        );
        DB::table('countries')->insert(
            array(
                'name' => 'საქართველო'
            )
        );
        DB::table('countries')->insert(
            array(
                'name' => 'მარსი'
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
        Schema::dropIfExists('countries');
    }
}
