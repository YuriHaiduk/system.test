<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'description' => 'Residential Cleaning',
        ]);
        Service::create([
            'description' => 'Commercial Cleaning',
        ]);
        Service::create([
            'description' => 'Janitorial Cleaning',
        ]);
        Service::create([
            'description' => 'Dry Cleaning',
        ]);
        Service::create([
            'description' => 'Green Cleaning',
        ]);
        Service::create([
            'description' => 'Pressure Washing',
        ]);
    }
}
