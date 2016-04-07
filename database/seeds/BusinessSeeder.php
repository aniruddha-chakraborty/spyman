<?php

use Illuminate\Database\Seeder;

class BusinessSeeder extends Seeder
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
        $people = DB::table('people')->skip(0)->take(50)->get();
        $business = ['Sunsilk','Oracle','Nanna biriani','Mina bazar','Super Mall'];
        $business_type = ['Food','Cloth','Mall','Rice','Super shop'];
        
        	foreach ($people as $peoples) {

        			for ($i = 1; $i <= rand(0,2); $i++) {

						DB::table('business')->insert([

			   				'full_name'		=> $peoples->full_name,
			   				'nid'			=> $peoples->nid,
			   				'business_name' => rand(0,4),
			   				'business_type'  	=> rand(0,4),
			   				'trade_licence'  	=>  microtime($casus->integer()),
			   				'trade_licence_date' => $faker->dateTimeThisCentury->format('Y-m-d')
					    
					    ]);

        			}

        	}

    }
}
