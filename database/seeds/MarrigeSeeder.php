<?php

use Illuminate\Database\Seeder;

class MarrigeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		   	$faker = Faker\Factory::create();
		   	for ($i = 1; $i < 10; $i++ ) {

			   DB::table('marrige')->insert([

	   				'full_name_male'	   	 => $faker->firstNameMale,
	                'full_name_female' 		 => $faker->firstNameFemale,
	                'male_nid' 				 => rand(1,50),
	                'female_nid'			=> rand(1,50)
			    ]);

		   	}

    }
}
