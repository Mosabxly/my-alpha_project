<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        $this->call([
            Rioseeder::class,
        ]);

     /*   $this->call([
            MoonSeeder::class,
            // يمكنك إضافة المزيد من Seeders هنا
        ]);
    
       // استدعاء Seeder الخاص بـ _user_lapha
       $this->call(UserLaphaSeeder::class);
    */
    
    }





}
