<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=0; $i < 50; $i++) 
        { 
            $authors = \App\Author::all();
        
            DB::table('posts')->insert ([
            'title' => $faker->sentence(4, true),
            'is_private' => $faker->numberBetween(0,1),
            'content' => $faker->realText(),
            'tag' => $faker->word,
            'author_id' => $faker->numberBetween(1,count($authors)),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")

            ]);
        }
    }
}
