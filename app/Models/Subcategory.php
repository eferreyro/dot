<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at' ];


    //relacion uno a muchos (hasMany)
    public function products(){
    return $this->hasMany(Product::class);
    }

    //relacion uno a muchos INVERSO (belongsTo)
    public function category(){
        return $this->belongsTo(Category::class);
    }

    //
}

 
