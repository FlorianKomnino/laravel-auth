<?php

namespace Database\Seeders;

use App\Models\Admin\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $newProject = new Project();
            $newProject->author = $faker->word();
            $newProject->title = $faker->sentence(5);
            $newProject->content = $faker->text(500);
            $newProject->topic = $faker->sentence(3);
            $newProject->post_date = $faker->dateTimeBetween('-1 year', 'today');
            $newProject->save();
        }
    }
}
