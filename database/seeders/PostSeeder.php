<?php

namespace Database\Seeders;

use App\Models\Post;
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
            $new_post = new Post();
            $new_post->title = $faker->sentence(10);
            $new_post->slug = Post::generateSlug($new_post->title);
            $new_post->date = $faker->date('Y-m-d');
            $new_post->image = 'https://media.istockphoto.com/id/1147544807/vector/thumbnail-image-vector-graphic.jpg?s=612x612&w=0&k=20&c=rnCKVbdxqkjlcs3xH87-9gocETqpspHFXu5dIGB4wuM=';
            $new_post->text = $faker->paragraph(5);

            $new_post->save();
        }
    }
}
