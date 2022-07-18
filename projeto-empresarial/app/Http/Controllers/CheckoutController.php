<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCheckoutFormRequest;
use App\Models\Checkout;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class CheckoutController extends Controller
{
    protected $user;
    protected $product;
    protected $checkout;

    public function __construct(User $user, Product $product, Checkout $checkout)
    {
        $this->user = $user;
        $this->product = $product;
        $this->checkout = $checkout;
        $this->model = $checkout;
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
    public function create()
    {
        return view('checkouts.create');
    }

    public function store(CreateCheckoutFormRequest $request)
    {
        $data = $request->all();
        $this->model->create($data);

        return redirect()->route('checkouts.index');
    }

    public function edit($id)
    {
        if(!$checkouts = $this->model->find($id))
            return redirect()->route('checkouts.index');

        return view('checkouts.edit', compact('checkouts'));
    }
    public function update(CreateCheckoutFormRequest $Request, $id)
    {
        if (!$checkouts = $this->model->find($id))
            return redirect()->route('checkouts.index');
        $data = $Request->all();

        $checkouts->update($data);

        return redirect()->route('checkouts.index');
    }
    public function destroy($id)
    {
        if (!$checkouts = $this->model->find($id))
            return redirect()->route('checkouts.index');

        $checkouts->delete();

        return redirect()->route('checkouts.index');
    }

}
