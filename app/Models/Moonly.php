<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Moonly extends Model
{
    //
   
    use HasFactory; // ← أضف هذا السطر
    
    protected $fillable = ['name', 'description' 'price' 'quantity']; // الحقول القابلة للتعبئة

}
