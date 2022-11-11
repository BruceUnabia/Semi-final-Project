<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MerchandiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'brand_name'=>'Maggi Magic',
                'product_name'=>'Maggi Magic Sarap',
                'category_id'=>'1',
                'retail_price'=>'50.00',
                'wholesale_price'=>'15.00',
                'unit_id'=>'1',
                'wholesale_qty'=>'1',
                'qty_stock'=>'1000',
            ]
        ];
        foreach($data as $merchandises) {
            \App\Models\Merchandise::create($merchandises);
        }  
    }
}
