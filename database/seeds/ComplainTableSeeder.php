<?php

use Illuminate\Database\Seeder;

class ComplainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i<=10; $i++)
        {
            DB::table('complain')->insert([
                'complainer_name' => 'complainer_'.str_random(10),
                'complainer_mobile' => str_random(10),
                'token_id' => bcrypt('token_id'),
                'vat_reg_id' => bcrypt('vat_reg_id'),
                'institute_name' => 'Institute name'.str_random(10),
                'address' => 'Address'.str_random(10),
                'complain' => 'Complain'.str_random(10),
                'complain_type' => 'general',
                'status' => 'incomplete',
                'completed_date' => date('Y-m-d'),
            ]);
        }
    }
}
