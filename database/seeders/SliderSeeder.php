<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slider::create([
            'sub_title' => 'Focus on Business',
            'title' => 'Our Target Is To Reach The Goal',
            'slug' => Str::slug('Our Target Is To Reach The Goal'),
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati assumenda dolores quisquam maiores atque, illum iste ad ex dolorem est. Lorem ipsum dolor sit amet consectetur adipisicing elit. At, debitis!',
            'image' => 'storage/Sliders/1706513817_65b755996be67.jpg'
        ]);
    }
}
