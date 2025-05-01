<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use function Laravel\Prompts\table;
use App\Models\User_lapha;
class UserLaphaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //')->insert([
          // لتوليد 10 مستخدمين وهميين باستخدام Factory
          User_lapha::factory(10)->create();  // استخدام الموديل User_lapha هنا

    }
}
