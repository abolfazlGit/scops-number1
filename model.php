<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    //به صورت مقدار ثابت
    //در اول اسم و بخش دوم را با حرف اول بزرگ نوشته شود  scope  همیشه حرف 
    public function scopeActive($query)
    {
        return $query->where('status' , 1);
    }

     
    
    public function scopeUser($query, $name )
    {
        return $query->where('name' , $name);
    }
}
