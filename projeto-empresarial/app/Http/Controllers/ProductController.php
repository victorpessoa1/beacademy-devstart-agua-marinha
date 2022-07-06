<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   /* public function __construct(Product $product)
    {
        $this->model = $product;
    }

    */

    public function index()
    {

        $product = Product::all();      
         return view('product.index', compact('product'));
    }


}
