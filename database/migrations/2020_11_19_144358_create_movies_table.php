<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('description');
            $table->year('year');
            $table->text('duration');
            $table->text('url');
            $table->string('imdb_id');
            $table->text('banner_url');
            $table->text('poster_url');
            $table->integer('views')->default(0);
            $table->timestamps();
        });
        DB::table('movies')->insert(
            array(
                'name' => 'Demolition',
                'description' => 'საინვესტიციო ბანკირი ემოციური სასოწარკვეთილების შემდეგ აღმოაჩენს იმედს, როცა ხვდება ქალს ჩიკაგოში.',
                'year' => '2015',
                'duration' => '1 საათი,49 წუთი',
                'url' => 'https://api.adjaranet.com/api/v1/movies/450144662/files/610675?source=adjaranet',
                'imdb_id' => 'tt1172049',
                'banner_url' => 'https://static.adjaranet.com/m_posters/856/145476983521.jpg',
                'poster_url' => 'https://static.adjaranet.com/posters/146657641963.jpg',
                'views' => '33',
                'created_at' => '2020-11-21 13:47:18',
                'updated_at' => '2020-11-24 08:38:12'
            )
        );
        DB::table('movies')->insert(
            array(
                'name' => 'ირლანდიელი',
                'description' => 'ფილმი ერთ-ერთი ყველაზე ცნობილი და საშიში დაქირავებული მკვლელის, ფრენკ შირენის, მეტსახელად ირლანდიელის ამბავს მოგვითხრობს, რომელიც მაფიასთან მუშაობდა. დაქირავებულ მკვლელად ყოფნა ყველას როდი შეუძლია, განსაკუთრებით მაშინ, როდესაც კრიმინალურ ავტორიტეტებთან გიწევს მუშაობა. მას ყველაზე ხშირად სხვა განგსტერების მოკვლას ავალებდნენ. ფრენკი არასდროს არ სვამდა ზედმეტ კითხვებს და აკეთებდა იმას, რასაც მისგან მოითხოვდნენ. ერთ-ერთი ყველაზე ცნობილი ადამიანი, რომელიც მან მოკლა გაერთიანებული პროფკავშირების პრეზიდენტი, ჯიმი ჰოფა იყო, რომელსაც მაფიასთან ჰქონდა კავშირები. ერთ დღეს, ჯიმი უბრალოდ გაქრება, და დიდი ხნის განმავლობაში არავინ იცოდა, ცოცხალი იყო თუ მკვდარი. მაგრამ სამართალდამცავები ვარაუდობდნენ, რომ მაფიასთან უთანხმოება გამო ჯიმი, ირლანდიელმა მოკლა…',
                'year' => '2019',
                'duration' => '3 საათი,29 წუთი',
                'url' => 'https://api.adjaranet.com/api/v1/movies/450303264/files/1397576?source=adjaranet',
                'imdb_id' => 'tt1302006',
                'banner_url' => 'https://static.adjaranet.com/movies/covers/1920/264/450303264-4f994ff0a5e03ab6ce26b5de56fa498d.jpg',
                'poster_url' => 'https://m.media-amazon.com/images/M/MV5BMGUyM2ZiZmUtMWY0OC00NTQ4LThkOGUtNjY2NjkzMDJiMWMwXkEyXkFqcGdeQXVyMzY0MTE3NzU@._V1_SX300.jpg',
                'views' => '25',
                'created_at' => '2020-11-24 09:01:40',
                'updated_at' => '2020-11-24 10:45:06'
            )
        );
        DB::table('movies')->insert(
            array(
                'name' => 'კაზინო',
                'description' => 'მარტინ სკორსეზე მაფიის ბოსის დაცემას გვიჩვენებს. ფილმი ნახევრად დოკუმენტურ სტილშია გადაღებული და აზარტული თამაშების სამოთხეში, ლას-ვეგასში ცხოვრებასა და მის წიაღში ჩამოყალიბებული მაფიის შესახებ მოგვითხრობს.',
                'year' => '1995',
                'duration' => '2 საათი,58 წუთი',
                'url' => 'https://api.adjaranet.com/api/v1/movies/926/files/414504?source=adjaranet',
                'imdb_id' => 'tt0112641',
                'banner_url' => 'https://static.adjaranet.com/movies/covers/1920/926/926-7bae9e8bff00cfd54b90f338b9e0fd38.jpg',
                'poster_url' => 'https://m.media-amazon.com/images/M/MV5BMTcxOWYzNDYtYmM4YS00N2NkLTk0NTAtNjg1ODgwZjAxYzI3XkEyXkFqcGdeQXVyNTA4NzY1MzY@._V1_SX300.jpg',
                'views' => '9',
                'created_at' => '2020-11-24 09:28:06',
                'updated_at' => '2020-11-24 11:06:06'
            )
        );

        DB::table('movies')->insert(
            array(
                'name' => 'მორიგი ფილმი ბორათზე',
                'description' => 'გაგრძელება 2006 წლის კომედიური ფილმისა, რომელიც გამოგონილი პერსონაჟის - ყაზახეთის ტელევიზიის ჟურნალისტის, ბორათის, ცხოვრებისეულ თავგადასავალზე მოგვითხრობს.',
                'year' => '2020',
                'duration' => '1 საათი 35 წუთი',
                'url' => 'https://api.adjaranet.com/api/v1/movies/878485407/files/1382174?source=adjaranet',
                'imdb_id' => 'tt13143964',
                'banner_url' => 'https://static.adjaranet.com/movies/covers/1050/407/878485407-b6657c610ed7752768da22a06726b782.jpg',
                'poster_url' => \App\Movie::getImdbMovieById('tt13143964')->Poster,
                'views' => '5',
                'created_at' => '2020-11-24 14:28:06',
                'updated_at' => '2020-11-24 15:06:06'
            )
        );

        DB::table('movies')->insert(
            array(
                'name' => 'დანის პირზე მორბენალი 2049',
                'description' => 'მოქმედება არც ისე შორეულ მომავალში ხდება, სადაც ქვეყანა დასახლებულია ადამიანებითა და რეპლიკანტებით. პოლიციის ოფიცერი კეის სამუშაო რეპლიკანტების მეთვალყურეობაში მდგომარეობს. იქამდე სანამ ის საიდუმლო ინფორმაციის მფლობელი არ გახდება, რომელიც საფრთხეში აგდებს მთელი კაცობრიობის არსებობას. რეი გადაწყვეტს იპოვოს რიკ დეკარდი, ლოს ანჯელესის სპეციალური ქვედანაყოფის ყოფილი ოფიცერი, რომელიც უკვალოდ გაქრა დიდი ხნის წინ.',
                'year' => '2017',
                'duration' => '2 საათი 44 წუთი',
                'url' => 'https://api.adjaranet.com/api/v1/movies/450303048/files/1226909?source=adjaranet',
                'imdb_id' => 'tt1856101',
                'banner_url' => 'https://static.adjaranet.com/movies/covers/1920/48/450303048-a965b371e236a66c72c33d38778e2514.jpg',
                'poster_url' => \App\Movie::getImdbMovieById('tt1856101')->Poster,
                'views' => '99',
                'created_at' => '2020-11-22 14:28:06',
                'updated_at' => '2020-11-22 15:06:06'
            )
        );

        DB::table('movies')->insert(
            array(
                'name' => 'დანის პირზე მორბენალი',
                'description' => '2019 წლის ლოს-ანჯელესში, პენსიაზე გასულ რიკ დეკარდს გამოიწვევევენ, რომ დედამიწაზე გამოგზავნილ უცხო არსებებს მიაგნოს. ისინი მათ შემქმნელს ეძებენ, რომ სიცოცხლე გაუხანგძლივონ.',
                'year' => '1982',
                'duration' => '2 საათი 44 წუთი',
                'url' => 'https://api.adjaranet.com/api/v1/movies/567/files/1226943?source=adjaranet',
                'imdb_id' => 'tt0083658',
                'banner_url' => 'https://static.adjaranet.com/movies/covers/1920/567/567-6ffd265c1240d638d40ebe1a03887394.jpg',
                'poster_url' => \App\Movie::getImdbMovieById('tt0083658')->Poster,
                'views' => '2049',
                'created_at' => '2020-11-21 14:28:06',
                'updated_at' => '2020-11-21 15:06:06'
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
        Schema::dropIfExists('movies');
    }
}
