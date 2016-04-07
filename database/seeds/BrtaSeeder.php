<?php

use Illuminate\Database\Seeder;

class BrtaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();
        $people =  $people = DB::table('people')->skip(0)->take(100)->get();
        $car_model = ['BMW','Corolla','Electric car'];

        	foreach ($people as $peoples) {

        			for ($i = 1; $i <= rand(2,3); $i++) {

						DB::table('brta')->insert([

			   				'full_name'		=> $peoples->full_name,
			   				'nid'		=> $peoples->nid,
			   				'car_model' => $faker->text,
			   				'price' 	=> rand(14000,20000),
			   				'tax' 	    => rand(5000,500000),
			   				'tax_percent' => rand(390,400),
			   				'address'	=> $faker->address
					    
					    ]);

        			}

        	}
    }
}
