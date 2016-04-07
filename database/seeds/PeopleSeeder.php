<?php

use Illuminate\Database\Seeder;

class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $casus = new \hedronium\Casus\Casus();

        	for ( $i = 1; $i <= 50; $i++ ) {

					DB::table('people')->insert([

		   				'full_name'	    => $faker->name,
		                'nid' 			=> microtime($casus->integer()),
		                'father_name'	=> $faker->name,
		                'father_id'		=> 00,
		                'mother_name'	=> $faker->name,
		                'mother_id'		=> 00,
		                'f_h'			=> rand(0,1),
		                'type'	   		=> rand(0,1),
		                'gender'		=> rand(0,1)
				    
				    ]);


        	}	
      
}


}