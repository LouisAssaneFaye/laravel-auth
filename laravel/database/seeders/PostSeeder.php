<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     
     */
    public function run(Faker $faker):void
    {
        for ($i=0; $i<100; $i++){
            $newPost = new Post();
            $newpost->title=ucfirst($faker->unique()->words(4,
        true));
            $newpost->content=$faker->paragraph(10, true);
            $newpost->slug= $faker->slug();
            $newpost->image=$faker->imageUrl(480, 360, 'post', true, 'posts', true, 'png');
            $newpost->save();
        }
    }
}
