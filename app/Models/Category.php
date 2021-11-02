<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //Asignacion maciva para el modelo
    protected $fillable = ['name', 'slug', 'image', 'icon'];
}
