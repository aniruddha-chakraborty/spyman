<?php

use Illuminate\Database\Seeder;

class PeopleFamilyUpdate extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $father = [2,3,6,9,10,11,14,16,20,21,22,24,26,30,31,32,33];
        $mother = [1,3,4,6,7,8,12,13,15,17,18,19,23,25,27,28,34];

        $people = DB::table('people')
                ->where('father_id',0)
                ->where('mother_id',0)
                ->get();

        	
foreach ($people as $peoples) {
                # code...
                $rand = rand(0,16);

                    DB::table('people')
                    ->where('id', $peoples->id)
                    ->update([ 'father_id' => $father[$rand] , 'mother_id' => $father[$rand]]);
                    
            }
            

    }
}
