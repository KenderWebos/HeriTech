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
            'company_name' => 'HeriTech',
            'location' => 'Chile',
            'logo' => 'YourLogo',
            'description' => 'a simple startup company',
            // 'color_primary',
            // 'color_secondary',
            // 'color_tertiary'
        ]);
    }
}
