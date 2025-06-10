<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory; // Enables factory() for Product
    // Fillable fields for mass assignment
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock_quantity',
    ];
}
