<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false; 

    protected $fillable = [
        'image',
        'name', 
        'description',
        'quantity',
        'price',
        'saleprice'
    ];

    public function checkouts()
    {
        return $this->hasMany(Checkout::class);
    }
}
