<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopcart extends Model
{
    use HasFactory;

    public function product(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->hasMany(Shopcart::class);
    }


}
