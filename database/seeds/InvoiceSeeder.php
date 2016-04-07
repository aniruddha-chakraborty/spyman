<?php

use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
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
            DB::table('invoice')->insert([
                'vat_regi' => 'vat regi_'.str_random(10),
                'product_list' => str_random(100),
                'token_id' => bcrypt('token_id'),
                'product_cost' => str_random(10),
                'total_vat' => str_random(10),
                'total_amount' => str_random(10)
            ]);
        }
    }
}
