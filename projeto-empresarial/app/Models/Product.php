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

    public function getProducts(string $search = null)
    {
        $products = $this->where(function ($query) use ($search) {
            if ($search) {
                $query->where('name', 'LIKE', "%{$search}%");
            }
        })->paginate(6);

        return $products;
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
