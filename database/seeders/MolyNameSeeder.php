<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MolyNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // تأكد من أن الموديل يسمى بشكل صحيح هنا
        \App\Models\MolyName::create([
            'name' => 'mosab abudeeb',
            'email' => 'modsb@sfsf.com',
            'password' => bcrypt('passwordadad'),
        ]);
    }
}
