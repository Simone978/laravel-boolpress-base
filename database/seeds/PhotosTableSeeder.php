<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Photo;


class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10 ; $i++) { 
            $newPhotos = new Photo;
            $newPhotos->user_id = rand(1,10);
            $newPhotos->path = 'https://picsum.photos/id/' . rand(1, 100) . '/300/200';
            $newPhotos->description = $faker->sentence($nbWords = 6, $variableNbWords = true);
            $newPhotos->save();
        }
    }
}
