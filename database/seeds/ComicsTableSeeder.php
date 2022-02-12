<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config("comics");

        foreach($comics as $item) {
            $newComic = new Comic();
            $newComic->title = $item["title"];
            $newComic->description = $item["description"];
            $newComic->series = $item["series"];
            $newComic->thumb = $item["thumb"];
            $newComic->type = $item["type"];
            $newComic->price = $item["price"];
            $newComic->save();

        }
    }
}
