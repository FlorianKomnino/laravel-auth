<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class postsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $newPost = new Post();
            $newPost->title = $faker->sentence(5);
            $newPost->content = $faker->text(3000);
            $newPost->topic = $faker->sentence(3);
            $newPost->author = $faker->word();
            $newPost->post_date = $faker->dateTimeBetween('-1 year', 'today');
            $newPost->save();
        }
    }
}
