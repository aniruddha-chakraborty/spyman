<?php

use Illuminate\Database\Seeder;

class RajukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$faker = Faker\Factory::create();
        $people = DB::table('people')->skip(0)->take(50)->get();

        	foreach ($people as $peoples) {

        			for ($i = 1; $i <= 7; $i++) {

						DB::table('rajuk')->insert([

			   				'name'		=> $peoples->full_name,
			   				'nid'		=> $peoples->nid,
			   				'data'  	=> $faker->text,
			   				'address' 	=> $faker->address,
			   				'price' 	=> rand(5000,500000)
					    
					    ]);

        			}

        	}
    }
}
