<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $fillable = [
        'name',
        'price',
        'category',
        'image',
        'owner',
        'price',
        'description', 
        'link',
        'product_type'
    ];
}
