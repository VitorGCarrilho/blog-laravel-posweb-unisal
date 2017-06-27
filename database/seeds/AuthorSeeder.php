<?php

use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 10 ; $i++){
            DB::table('authors')->insert ([
            	'name' => $faker->name(),
            	'username' => $faker->userName(),
            	'email' => $faker->email(),
            	'about' => $faker->realText(100),
            	'modified_at' => date("Y-m-d H:i:s"),
            	'created_at' => date("Y-m-d H:i:s"),
            	'updated_at' => date("Y-m-d H:i:s")
            ]);
        }
    }
}
