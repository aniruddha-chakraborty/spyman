<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        //$this->call(CreateUsersTable::class);
        $this->call(ComplainTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PeopleSeeder::class);
        $this->call(PeopleFamilyUpdate::class);
        $this->call(RajukSeeder::class);
        $this->call(LandSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(BusinessSeeder::class);
        $this->call(BrtaSeeder::class);
        $this->call(MarrigeSeeder::class);

        Model::reguard();
    }
}
