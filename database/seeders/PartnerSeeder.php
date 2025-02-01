<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Partner;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Partner::create([
            'name' => 'Partner 1',
            'logo' => 'images/partners/partner1.png',
            'website' => 'https://partner1.com',
            'display' => true,
        ]);

        Partner::create([
            'name' => 'Partner 2',
            'logo' => 'images/partners/partner2.png',
            'website' => 'https://partner2.com',
            'display' => true,
        ]);

        // Add more partners as needed
    }
}
