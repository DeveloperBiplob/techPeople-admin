<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            SliderSeeder::class,
            ConfigerSeeder::class,
            OverviewSeeder::class,
            AboutSeeder::class,
            GallerySeeder::class,
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'techpeople@gmail.com',
            'password' => Hash::make('tech9632')
        ]);
        
    }
}
