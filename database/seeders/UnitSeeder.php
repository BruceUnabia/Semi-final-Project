<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class UnitSeeder extends Seeder
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
                'unit_type'=>'Maggi Seasoning',
                'description'=>'All in one Seasoning'
            ]
        ];
        foreach($data as $units) {
            \App\Models\Unit::create($units);
        } 
    }
}

