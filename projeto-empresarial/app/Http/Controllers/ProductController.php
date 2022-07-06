<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   /* public function __construct(Product $products)
    {
        $this->model = $products;
    }

    */

    public function index()
    {

        $product = Product::all();
         return view('products.index', compact('product'));
    }


}
