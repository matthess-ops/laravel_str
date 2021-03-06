<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;


class AudioBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    // $table->timestamps();
    // $table->string('author');
    // $table->string('title');
    // $table->string('book_series');
    // $table->string('series_nr');
    // $table->string('genre');
    // $table->text('description_short');
    // $table->text('description_large');
    // $table->string('cover_image');
    // $table->string('audio_file');



    public function run()
    {
    //   $irongold='https://www.goodreads.com/book/show/33257757-iron-gold?from_search=true&from_srp=true&qid=i7VdKLsefk&rank=1';
    //   $harry ='https://www.goodreads.com/book/show/5.Harry_Potter_and_the_Prisoner_of_Azkaban';
    //   $comedy = 'https://www.goodreads.com/book/show/57851735-comedy-comedy-comedy-drama';
    //   $lisa = 'https://www.goodreads.com/book/show/55922299-the-night-she-disappeared';
    //   $mistborn = 'https://www.goodreads.com/book/show/10803121-the-alloy-of-law?ac=1&from_search=true&qid=6LgRDK75oU&rank=4';
    //   $dragon = 'https://www.goodreads.com/book/show/34897.The_Dragon_Reborn';

    //   app(\App\Http\Controllers\Api\GoodreadsController::class)->parser($harry);
    //   app(\App\Http\Controllers\Api\GoodreadsController::class)->parser($irongold);
    //   app(\App\Http\Controllers\Api\GoodreadsController::class)->parser($comedy);
    //   app(\App\Http\Controllers\Api\GoodreadsController::class)->parser($lisa);
    //   app(\App\Http\Controllers\Api\GoodreadsController::class)->parser($mistborn);
    //   app(\App\Http\Controllers\Api\GoodreadsController::class)->parser($dragon);



      $descriptionLargetext = "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.";

      for ($audioBook=1; $audioBook < 16; $audioBook++) {


        $title = "even";
        if($audioBook % 2 == 0){
            $title = "_EVEN_";
        }
        else{
            $title = "_ODD_";
        }


        DB::table('audiobooks')->insert([
            'author' => "author-audiobook_".$audioBook,

            'title' => "search".$title."title_".$audioBook,
            'book_series' => "book_series-audiobook_".$audioBook,
            'genre' => "genre_series-audiobook_".$audioBook,
            'description_short' => "description_short-audiobook_".$audioBook,
            'description_large' => "description_large-audiobook_".$audioBook." ".$descriptionLargetext,
            'cover_image' => "http://localhost:8000/storage/test_image.jpg",
            'audio_file' => "audio_file-audiobook_".$audioBook,
            'rating'=> "4.23",
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),

        ]);
      }



    }
}
