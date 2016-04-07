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
		   			$rand1 = rand(1,50);
		   			$rand2 = rand(1,50);

		   			$gen_ran1 = rand(0,1);
		   				
		   				if($gen_ran1 == 0){
		   					
		   					$gen_ran2 = 1;
		   				
		   				} else {

		   					$get_ran2 = 0;

		   				}

		   		$male = $faker->name;
		   		$female = $faker->name;

			   DB::table('marrige')->insert([

	   				'people_1_name'	   	 	=> $male,
	                'people_2_name' 		=> $female,
	                'people_1_nid' 			=> $rand1,
	                'people_2_nid'			=> $rand2,
	                'people_1_gender'		=> $gen_ran1,
	                'people_2_gender' 		=> $gen_ran2
			    ]);

			   DB::table('marrige')->insert([

	   				'people_1_name'	   	 	=> $female,
	                'people_2_name' 		=> $male,
	                'people_1_nid' 			=> $rand2,
	                'people_2_nid'			=> $rand1,
	                'people_1_gender'		=> $gen_ran2,
	                'people_2_gender' 		=> $gen_ran1
			    ]);

		   	}

    }
}
