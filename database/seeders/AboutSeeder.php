<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\About;
use App\Models\CompanyDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Nette\Utils\Random;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'title' => 'This is default about',
            'slug' => Str::slug('This is default about'),
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati assumenda dolores quisquam maiores atque, illum iste ad ex dolorem est. Lorem ipsum dolor sit amet consectetur adipisicing elit. At, debitis!',
            'image' => 'image'
        ]);
        CompanyDetail::create([
            'title' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis, explicabo!',
            'slug' => Str::slug('Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis, explicabo!'),
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis doloribus reprehenderit aliquid, perspiciatis dicta quaerat provident accusantium laudantium sint? Et maxime incidunt ipsa, nisi quas possimus laudantium sequi ad illum quaerat maiores iusto aperiam labore qui perferendis error, recusandae, assumenda deserunt fugiat rem necessitatibus odio a! Quis in quae adipisci.

            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis doloribus reprehenderit aliquid, perspiciatis dicta quaerat provident accusantium laudantium sint? Et maxime incidunt ipsa, nisi quas possimus laudantium sequi ad illum quaerat maiores iusto aperiam labore qui perferendis error, recusandae, assumenda deserunt fugiat rem necessitatibus odio a! Quis in quae adipisci.',
            'image' => 'image'
        ]);
    }
}
