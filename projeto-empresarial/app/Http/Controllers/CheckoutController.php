<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        if($request->id)
            return redirect('/checkout/'.$request->id);

        return view('checkout.index');
    }
}
