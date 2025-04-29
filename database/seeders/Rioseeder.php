<?php


namespace Database\Seeders;
use App\Models\Rio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Rioseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rio::Factory(20)->create();
    }
}
