<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable =['photo','name', 'description','quantity','price','saleprice'];


}
