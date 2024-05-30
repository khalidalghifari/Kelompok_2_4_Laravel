<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::create([
            'PageType' => 'aboutus',
            'PageTitle' => 'About Us',
            'PageDescription' => '<div><font color="#202124" face="arial, sans-serif"><b>Our mission declares our purpose of existence as a company and our objectives.</b></font></div><div><font color="#202124" face="arial, sans-serif"><b><br></b></font></div><div><font color="#202124" face="arial, sans-serif"><b>To give every customer much more than what he/she asks for in terms of quality, selection, value for money and customer service, by understanding local tastes and preferences and innovating constantly to eventually provide an unmatched experience in jewellery shopping.</b></font></div>',

            'MobileNumber' => fake()->biasedNumberBetween(1000000000, 9999999999),
            'Email' => fake()->email(),
            'Timing' => '10:30 am to 7:30 pm',
        ]);

        Page::create([
            'PageType' => 'contactus',
            'PageTitle' => 'Contact Us',
            'PageDescription' => '890,Sector 62, Gyan Sarovar, GAIL Noida(Delhi/NCR)',

            'MobileNumber' => fake()->biasedNumberBetween(1000000000, 9999999999),
            'Email' => 'info@gmail.com',
            'Timing' => '10:30 am to 7:30 pm',
        ]);
    }
}
