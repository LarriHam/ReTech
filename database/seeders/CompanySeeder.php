<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::factory()->create([
            'name'=>'Lenovo',
            'phone_no'=>'07015472250',
            'company_info'=>"Lenovo Group Limited, trading as Lenovo, is a Chinese multinational technology company specializing in designing, manufacturing, and marketing consumer electronics, personal computers, software, business solutions, and related services. Products manufactured by the company include desktop computers, laptops, tablet computers, smartphones, workstations, servers, supercomputers, data storage devices, IT management software, and smart televisions. Its best-known brands include its ThinkPad business line of laptop computers (acquired from IBM), the IdeaPad, Yoga, LOQ, and Legion consumer lines of laptop computers, and the IdeaCentre, LOQ, Legion, and ThinkCentre lines of desktop computers. As of 2024, Lenovo is the world's largest personal computer vendor by unit sales. Lenovo is making the industry’s broadest portfolio of technology solutions more sustainable. For example, 100% of lenovo's ThinkPad and ThinkCentre devices are ENERGY STAR. Lenovo uses plastic-free packaging and packaging made from rapidly renewable bamboo sugarcane on a growing number of products, while the bulk packaging services help reduce waste and control transit costs.",
        ]);   

        Company::factory()->create([
            'name'=>'Nothing',
            'phone_no'=>'07882046617',
            'company_info'=>"Nothing Technology Limited (stylised as NOTHING) is a British consumer electronics manufacturer based in London.[1] It was founded by Carl Pei, the co-founder of the Chinese smartphone maker OnePlus. Investors in the company include Tony Fadell of iPod, Twitch co-founder Kevin Lin, Reddit CEO Steve Huffman, and YouTube personality Casey Neistat.[2] On 25 February 2021, the company announced Teenage Engineering as a founding partner, mainly responsible for the brand's design aesthetic and its products. Nothing's first product, 'EAR (1)', was launched on 27 July 2021. With a focus on recycled materials, renewable energy and plastic-free packaging, Phone (2) is designed to be one of the most sustainable smartphones on the market. Phone (2) has 53 parts made with bio-based and recycled materials, including plastic, aluminium, steel, tin, and copper, which account for 20% of the phone’s weight. Phone (2) is free of harmful substances like PVC, brominated flame retardants (BFRs), polycyclic aromatic hydrocarbons (PAHs) and mineral oil. The packaging is plastic-free and FSC Mix certified, with over 60% of the fibres coming from recycled sources.",
        ]); 

        Company::factory()->create([
            'name'=>'Fairphone',
            'phone_no'=>'07089081330',
            'company_info'=>"Fairphone is a Dutch electronics manufacturer that designs and produces smartphones and headphones. It aims to minimise the ethical and environmental impact of its devices by using recycled, fairtrade and conflict-free materials, maintaining fair labor conditions throughout its workforce and suppliers, and enabling users to easily repair their devices through modular design and by providing replacement parts. As of 2023, the company's most recent smartphone is the Fairphone 5, which it plans to provide with security updates and software support, including 5 OS updates, for 10 years. The phone is modular, which makes it easily repairable and customisable by the user. According to the company, increasing the lifespan of a phone by two years reduces CO₂ emissions by 30%. The gold and silver in Fairphone 4 has the Fairtrade label, also metals used are said to come from conflict-free mines. The company promises a 5-year warranty period and long-term support for software updating and spare parts. In 2017, Fairphone's founder Bas van Abel acknowledged that it was currently impossible to produce a 100% fair phone, suggesting it was more accurate to call his company's phones 'fairer'.",
        ]);

        Company::factory()->create([
            'name'=>'Samsung',
            'phone_no'=>'07836629745',
            "company_info"=>"Samsung Group is a South Korean multinational manufacturing conglomerate headquartered in Samsung Digital City, Suwon, South Korea. It comprises numerous affiliated businesses, most of them united under the Samsung brand, and is the largest South Korean chaebol (business conglomerate). As of 2020, Samsung has the eighth-highest global brand value. The New Environmental Strategy specifies the company’s roadmap to achieve net zero at the Device eXperience (DX) Division by 2030 and at the company level including the Device Solutions (DS) Division by 2050, as well as its efforts to contribute to climate action and a circular economy. In 2022, Samsung completed its transition to renewable energy use in Vietnam, India and Brazil — in line with the company’s goal to fully transition to renewable energy use at DX and all operational sites outside Korea by 2027. In addition, the company increased the amount of recycled resin used in its plastic parts — on track towards its goal to use recycled resin in 50% of plastic parts by 2030 and in all plastic components by 2050. In 2022, Samsung’s DS Division expanded installations of Regenerative Catalytic Systems (RCSs) in its facilities to treat process gas more efficiently and reduce direct greenhouse gas (GHG) emissions."
        ]);
    }
}
