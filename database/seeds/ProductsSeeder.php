<?php

use Illuminate\Database\Seeder;
use App\Products;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 15; $i++) { 
            Products::create([
               'merk_sepatu' => 'Sepatu '.$i,
               'jenis_sepatu' => 'FlatShoes '.$i,
               'no_sepatu' => '4'.$i,
               'foto_sepatu' => 'foto '.$i,
               'stok_sepatu' => '1'.$i,
               'status' => 'baik '.$i,
            ]);
        }
    }
}
