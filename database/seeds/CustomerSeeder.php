<?php

use Illuminate\Database\Seeder;
use App\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 3; $i++) { 
            Customer::create([
                'first_name' => 'customer'.$i,
                'last_name' => 'dosa'.$i,
                'address' => 'indonesia'.$i,
                'email' => 'customer@customer.com'.$i,
                'username' => 'cus'.$i,
                'password' => \Hash::make('customer123')
            ]);
        }
    }
}
