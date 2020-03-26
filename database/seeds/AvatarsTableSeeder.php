<?php

use Illuminate\Database\Seeder;
use App\Avatar;
use Faker\Generator as Faker;

class AvatarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=1; $i <=10 ; $i++) { 
            $newAvatar = new Avatar;
            $newAvatar -> user_id = $i;
            $newAvatar -> img = "https://i.pravatar.cc/150?img=".rand(1,100)."";
            $newAvatar -> save();
        }
    }
}
