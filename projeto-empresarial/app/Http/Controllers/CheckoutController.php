<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;
use App\Models\User;

class CheckoutController extends Controller
{
    protected $user;
    protected $checkout;

    public function __construct(User $user, Checkout $checkout)
    {
        $this->user = $user;
        $this->checkout = $checkout;
    }
    public function index()
    {

        $checkouts = $this->checkout->all();

        return view('checkouts.index',compact('checkouts'));
    }
    public function show($userId)
    {
        if(!$user = $this->user->find($userId))
            return redirect()->back();

        $checkouts = $user->checkouts()->get();

        return view ('checkouts.show',compact('user','checkouts'));
    }
}
