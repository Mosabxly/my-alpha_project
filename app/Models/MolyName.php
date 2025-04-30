<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class MolyName extends Model
{
    // تحديد الحقول القابله للتحميل 
    use HasFactory;
    protected $fillable =['name' , 'email', 'password'];

}
