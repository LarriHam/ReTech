<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::factory()->create([
            'name'=>'Lenovo',
            'phone_no'=>'123456789'
            'company_info'=>'This is some company info'
        ]);   
    }
}
