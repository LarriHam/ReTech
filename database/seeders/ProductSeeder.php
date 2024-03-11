<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()->create([
            'name'=>'Nokia flip'
            'summary'=>'Kinda trash'
            'review'=>'Wouldnt reccomend'
            'rating'=>'5'
            'img'=>'mew.png'
            'company_id'=>'1'

        ]);
    }
}
