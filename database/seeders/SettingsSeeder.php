<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'company_name' => 'YourCompanyName',
            'location' => 'YourLocation',
            'logo' => 'YourLogo',
            'description' => 'YourCompanyDescription',
            // 'color_primary',
            // 'color_secondary',
            // 'color_tertiary'
        ]);
    }
}
