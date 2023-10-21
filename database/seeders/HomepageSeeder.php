<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Homepage;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class HomepageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Homepage::create([
            'imagee' => 'logo.png',
            'deskripsii' => 'Yogyakarta',
        ]);
    }
}
