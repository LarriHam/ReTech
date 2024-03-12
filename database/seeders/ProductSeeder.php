<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()->create([
            "name"=>"Fairphone 5",
            "summary"=>"Sustainable phone-maker Fairphone wants its new Fairphone 5 to save the planet.",
            "review"=>"Sustainable phone-maker Fairphone wants its new Fairphone 5 to save the planet.",
            "rating"=>"5",
            "price"=>"600.00",
            "img"=>"fairphone.png",
            "company_id"=>"1",

        ]);
    }
}
