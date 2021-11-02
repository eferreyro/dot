<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //Defino que campos quiero evitar que se definan por asignacion masiva. lo contrario que usar $fillable
    protected $guarded = ['id', 'created_at', 'updated_at' ];

    //Relacion uno a muchos
    public function sizes(){
        return $this->hasMany(Size::class);
    }

    //Relacion uno a muchos Inversa
    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }


    //Relacion muchos a muchos
    public function colors(){
        return $this->belongsToMany(Color::class);
    }

    //relacion uno a muchos POLIMORFICA
    public function images(){
        return $this->morphMany(Image::class, 'imageable');
    }


}
