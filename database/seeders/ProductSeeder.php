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
            "summary"=>"Sustainable phone-maker Fairphone wants its new Fairphone 5 to save the planet. Its eight years of software support is the best around, it's so easy to repair you can fix it yourself at home if you happen to smash your screen, and it has a microSD card slot. Fairphone works with organizations that ensure that materials used in production are fair-trade. The best way to minimize the environmental impact of your phone is to keep using it for as long as possible before swapping it out for an entirely new device.",
            "review"=>"Sustainable phone-maker Fairphone wants its new Fairphone 5 to save the planet. From its recycled materials, fair-trade components, easy repairability and epic security support, Fairphone has worked hard to minimize the environmental impact of its newest socially conscious phone. It's a noble cause and while I enthusiastically applaud the work that Fairphone has done here, as a phone, the Fairphone 5 itself is a bit of a letdown.  But the phone isn't all bad. Its eight years of software support is the best around, it's so easy to repair you can fix it yourself at home if you happen to smash your screen, and it has a microSD card slot to expand the built-in storage by up to 2TB. But still, while I love the eco credentials behind it, it's not the best phone you can buy for the money. Here's what you should know. Fairphone aims to do things differently. It works with organizations that ensure that materials used in production are fair-trade, and Fairphone works with the factories that produce the products to ensure workers are properly treated and paid a fair living wage. And while companies including Apple, Samsung and Google use a limited amount of recycled parts in their products, Fairphone uses recycled materials throughout every component possible, including recycled tin and steel in the battery. The phone itself is easily repairable by you (I took mine apart to test this) with 10 different components, including all the cameras, the display and the battery, available to buy directly from Fairphone so you can fix your phone at home and keep it going for longer. Because the best way to minimize the environmental impact of your phone is to keep using it for as long as possible before swapping it out for an entirely new device.",
            "rating"=>"5",
            "price"=>"699.00",
            "img"=>"fairphone.png",
            "category"=>"phone",
            "company_id"=>"1",

        ]);
    }
}
