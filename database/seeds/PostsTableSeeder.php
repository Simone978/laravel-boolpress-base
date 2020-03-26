<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $newpost = new Post;
            $newpost->imageUrl = $faker->imageUrl($width = 640, $height = 480);
            $newpost->title = $faker->sentence($nbWords = 5, $asText = false);
            $newpost->content = $faker->paragraph($nbSentences = 3, $variableNbSentences = true);
            $newpost->category = $faker->word;
            $newpost->data = '2020-3-24';
            $newpost->save();
        }
        
    }
}
