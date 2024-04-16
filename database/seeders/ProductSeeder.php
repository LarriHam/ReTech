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
            "company_id"=>"3",

        ]);

        Product::factory()->create([
            "name"=>"Nothing Phone 2",
            "summary"=>"The Nothing Phone (2) premieres one year after the first Nothing phone, and it is shaping as an amazing sequel offering enough relevant upgrades - an improved screen, flagship hardware, better cameras, and faster charging. Oh, and the Glyph UI has been expanded, of course.",
            "review"=>"The Nothing Phone (2) is indeed following in the footsteps of its predecessor, and what many thought of as a gimmick - the Glyph UI - is here to stay, and it offers some new cool functions. The Nothing Phone (2) brings a larger 6.7' OLED screen with an improved LTPO panel that allows for a dynamic refresh rate between 1Hz and 120Hz. It supports 10-bit color depth, HDR10+, 240Hz touch response, and up to 1,000 nits of sunlight brightness. The most notable upgrade is the chipset - it is now the Snapdragon 8+ Gen 1, up from the Snapdragon 778G+ on the previous model. And just like that, the Nothing Phone has moved up from the midrange class to the flagship one. The dual 50MP cameras on the back appear to be similar to the ones on the Nothing Phone (1) - wide + ultrawide (with macro) - but according to the official materials, they can now capture more data thanks to the new ISP and newly developed advanced algorithms. And the 2x Super-Res Zoom should benefit greatly from that. The larger screen and body allowed for a slightly larger battery - it now has a 4,700mAh capacity. The wired charging has been improved, too; it is now 45W, up from 33W. The 15W wireless and 5W reverse wireless options are still available. There is one final improvement that is invisible to the naked eye - the ingress protection has been upped from IP53 to IP54, meaning the Nothing Phone (2) can now survive splashing water for about 10 minutes. The Nothing Phone (2) is a well-rounded offer with balanced specs and thoughtfully picked features, one that offers something unique on the market - the Glyph UI notification LEDs. It could have been better with the latest Snapdragon 8 Gen 2 chip, yet Nothing has managed to offer top-tier performance and yet keep a mid-range price, so we'd say that is a win.",
            "rating"=>"4",
            "price"=>"600.00",
            "img"=>"img2",
            "category"=>"phone",
            "company_id"=>"1",

        ]);

        Product::factory()->create([
            "name"=>"Samsung Galaxy S22 Ultra",
            "summary"=>"Samsung Galaxy S22 Ultra review found a big, powerful, and attractive Android phone (if you like them monolithic). It’s super-versatile, ready for important work, hand-written notes, gaming, and casual big-screen web browsing – and the cameras are a clear highlight, with the Space Zoom capabilities taking you to infinity and beyond. And, yes, you’ll pay handily for all these features.",
            "review"=>"With Qualcomm’s flagship SoC under the hood, the Samsung Galaxy S22 Ultra offers an ultra-fast performance. Whether you are a multi-tasker switching between apps or a gamer, the S22 Ultra can get the job done without a hiccup. Though the thermals could have been slightly better as the back generally gets a little warm when the device is under heavy stress, like recording a 4K 60fps video continuously for over three minutes. Even when gaming with graphics-intense games on mobile data, the device gets a little warm, but that’s not the same on Wi-Fi. Keeping aside these high-pressure scenarios, the combination of Snapdragon 8 Gen 1 SoC, paired with 12GB of RAM ensures a buttery smooth experience. The battery life is “good enough” but could have been better. Even with a juicy 5,000mAh battery, you could get a full day’s worth of usage but cannot stretch it beyond that with moderate to heavy usage. I’ve also been using the Galaxy Z Fold4 powered by the refined Snapdragon 8+ Gen 1 SoC, where the performance and efficiency gains are clearly visible, but we will talk about that in the Fold’s review in the next few weeks. On paper, the camera hardware is the same as we had in the Galaxy S21 Ultra, but the upgraded image signal processor (ISP) on the Snapdragon 8 Gen 1 SoC brings some key changes. From detailed RAW photos to the new Night Mode which Samsung calls Nightography, to better HDR, there are a lot of under-the-hood tricks unlocked by the Snapdragon SoC, AI, and Samsung’s One UI. All these efforts also ensured that the smartphone scored 135 in DXOMARK’s camera rankings. With the Galaxy S23 series launch around the corner, we expect Qualcomm and Samsung partnership, which was announced at the Snapdragon Tech Summit in November 2022, to bring more camera-centric innovations. Samsung announced that the Galaxy S22 series will get four major Android upgrades and five years of security updates, which is better than its competitors. But even more impressive is the speed of updates. We’ve been getting timely security updates every month, and the Android software update rollout was also much faster.",
            "rating"=>"2",
            "price"=>"800.00",
            "img"=>"img2",
            "category"=>"phone",
            "company_id"=>"4",

        ]);

        Product::factory()->create([
            "name"=>"Nokia G22",
            "summary"=>"The Nokia G22 is a budget Android model designed to be repaired at home using fairly simple tools, with replacement parts readily available from iFixit. The short software support life of only three years from release is disappointing.",
            "review"=>"Nokia’s G22 smartphone is designed to be easily repaired by its owner, so you can carry out some of the more common repairs – screen, battery, charging port, the rear case. To make sure that it is, the company has linked up with repair service iFixit. The company will provide the spare parts you need, plus the tools and the guides to ensure you can follow the process step by step, and hopefully you will end up with a fully repaired and working phone by the end. It looks good, with a decent screen that clocks in at 6.52 inches and has Gorilla Glass 3 to protect it. Looks wise, there is a bit of a bezel at the bottom, which makes it feel a little off balance, but it is a minor quibble. Is it the most high-tech of screens? It’s a HD+ screen, which is lower quality than the previously mentioned flagships, but the difference isn’t very noticeable, especially when taking the significantly cheaper price into account. You get what you pay for, and in this case, it is a 90Hz refresh rate display. There’s an 8MP selfie camera, too, with AI portrait mode and tweaks to make you look either like a better version of yourself or a little alien, depending on how far you want to push those “beautify” settings. The phone comes with 128GB of internal storage, with 4GB of RAM and the whole thing is powered by a Unisoc T606 chip. This is probably the one thing that will give people pause for thought. It doesn’t have the same brand recognition as the Snapdragon chips, and it’s not as powerful as the more expensive chips, but it comes back to the same argument: you get what you pay for. In this case, you are paying for a decent chip that will perform well under normal use, as long as you don’t try to overtax it. Regular tasks, photography and video recording, some multitasking and a bit of gaming is all comfortably within its capabilities.",
            "rating"=>"4",
            "price"=>"200.00",
            "img"=>"img2",
            "category"=>"phone",
            "company_id"=>"4",

        ]);
    }
}
