<?php

use Illuminate\Database\Seeder;

class LandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();
        $people =  $people = DB::table('people')->skip(0)->take(50)->get();

        	foreach ($people as $peoples) {

        			for ($i = 1; $i <= 4; $i++) {

						DB::table('land')->insert([

			   				'full_name'		=> $peoples->full_name,
			   				'nid'		=> $peoples->nid,
			   				'land_info' => $faker->text,
			   				'address' 	=> $faker->address,
			   				'price' 	=> rand(5000,500000)
					    
					    ]);

        			}

        	}
    }
}
