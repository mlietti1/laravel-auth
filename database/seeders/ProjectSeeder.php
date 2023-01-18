<?php

namespace Database\Seeders;

use App\Models\Project;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 5; $i++){
            //creo istanza
            $new_project = new Project();
            $new_project->title = $faker->sentence(10);
            $new_project->slug = Project::generateSlug($new_project->title);
            $new_project->date = $faker->date('Y-m-d');
            $new_project->image = 'https://media.istockphoto.com/id/1147544807/vector/thumbnail-image-vector-graphic.jpg?s=612x612&w=0&k=20&c=rnCKVbdxqkjlcs3xH87-9gocETqpspHFXu5dIGB4wuM=';
            $new_project->text = $faker->paragraph(5);

            $new_project->save();
        }
    }
}
