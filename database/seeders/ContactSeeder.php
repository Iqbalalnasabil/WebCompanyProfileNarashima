<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Contact;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'alamat' => 'Yogyakarta',
            'nophone' => '021 52921599',
            'email' => 'info@sims.co.id',
            'ecommerce' => 'senin - jumat',
            'instagram' => '08:00 - 16:00 WIB',
            'maps' => 'maps.com',
        ]);
    }
}
