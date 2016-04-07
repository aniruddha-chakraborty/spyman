<?php

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
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

        			for ($i = 1; $i <= 1; $i++) {

						DB::table('service')->insert([

			   				'full_name'		=> $peoples->full_name,
			   				'nid'			=> $peoples->nid,
			   				'salary'  		=> rand(5000,50000),
			   				'job_info'  	=> $faker->text					    
					    ]);

        			}

        	}
    }
}
