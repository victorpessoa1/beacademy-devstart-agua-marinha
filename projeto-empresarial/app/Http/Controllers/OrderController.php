<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrderFormRequest;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class OrderController extends Controller
{
    protected $user;
    protected $product;
    protected $order;

    public function __construct(User $user, Product $product, Order $order)
    {
        $this->user = $user;
        $this->product = $product;
        $this->order = $order;
        $this->model = $order;
    }
    public function index()
    {
        $orders = $this->order->all();

        return view('orders.index',compact('orders'));
    }
    public function show($userId)
    {
        if(!$user = $this->user->find($userId))
            return redirect()->back();

        $orders = $user->orders()->get();

        return view ('orders.show',compact('user','orders'));
    }
    public function create($id)
    {
        if(!$product = $this->product->find($id))
            return redirect()->back();


        return view('orders.create', compact('product'));
    }

    public function store(CreateOrderFormRequest $request)
    {
        $data = $request->all();
        $this->model->create($data);

        return redirect()->route('orders.index');
    }

    public function edit($id)
    {
        if(!$orders = $this->model->find($id))
            return redirect()->route('orders.index');

        return view('orders.edit', compact('orders'));
    }
    public function update(CreateOrderFormRequest $Request, $id)
    {
        if (!$orders = $this->model->find($id))
            return redirect()->route('orders.index');
        $data = $Request->all();

        $orders->update($data);

        return redirect()->route('orders.index');
    }
    public function destroy($id)
    {
        if (!$orders = $this->model->find($id))
            return redirect()->route('orders.index');

        $orders->delete();

        return redirect()->route('orders.index');
    }

}
