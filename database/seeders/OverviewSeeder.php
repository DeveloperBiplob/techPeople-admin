<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\Overview;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OverviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Overview::create([
            'title' => 'Project Completed',
            'slug' => Str::slug('Project Completed'),
            'amount' => 300
        ]);
        Overview::create([
            'title' => 'Safisfied Clients',
            'slug' => Str::slug('Safisfied Clients'),
            'amount' => 280
        ]);
        Overview::create([
            'title' => 'Expert Teams',
            'slug' => Str::slug('Expert Teams'),
            'amount' => 150
        ]);
        Overview::create([
            'title' => 'Win Awards',
            'slug' => Str::slug('Win Awards'),
            'amount' => 50
        ]);
    }
}
