<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
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
                'category'=>'Maggi Magic Sarap',
                'details'=>'All in one seasoning'
            ]
        ];
        foreach($data as $categories) {
            \App\Models\Category::create($categories);
        } 
    }
}
