<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //Asignacion maciva para el modelo
    protected $fillable = ['name', 'slug', 'image', 'icon'];

    //relacion uno a muchos
    public function subcategories(){
        return $this->hasMany(Subcategory::class);
    }

    //relacion muchos a muchos
    public function brands(){
        return $this->belongsToMany(Brand::class);
    }

    //Relacion de dos modelos dependiente
    public function products(){
        return $this->hasManyThrough(Product::class, Subcategory::class);
    }

}
