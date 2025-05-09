<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('moonlies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name'); 
            $table->text('description')->nullable(); 
            $table->decimal('price', 8, 2); 
            $table->integer('quantity')->default(0); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('moonlies');
    }
};
