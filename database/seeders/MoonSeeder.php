<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Moonly;
class MoonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // إنشاء 50 منتج باستخدام Factory
        Moonly::factory()->count(50)->create();
        
        // أو يمكنك إنشاء بيانات محددة يدوياً
        Moonly::create([
            'name' => 'Product 1',
            'description' => 'Description for product 1',
            'price' => 99.99,
            'quantity' => 10,
        ]);
    }
}
