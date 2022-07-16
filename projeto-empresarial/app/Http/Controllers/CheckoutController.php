<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateCheckoutFormRequest;
use App\Models\Checkout;

class CheckoutController extends Controller
{
    public function __construct(Checkout $checkout)
    {
        $this->model = $checkout;
    }
    public function index()
    {
        $checkouts = Checkout::all();

        return view('checkouts.index', compact('checkouts'));
    }

    public function show($id)
    {
        if(!$checkouts = Checkout::find($id))
            return redirect()->route('checkouts.index');

        $title = 'Pedido ' .$checkouts->id;

        return view('checkouts.show', compact('checkouts', 'title'));
    }

    public function create()
    {
        return view('checkouts.create');
    }

    public function store(CreateCheckoutFormRequest $request)
    {
        $data = $request->all();


        if($request->image){
            $file = $request['image'];
            $path = $file->store('profile', 'public');
            $data['image'] = $path;
        }

        $this->model->create($data);

        return redirect()->route('checkouts.index');
    }

    public function edit($id)
    {
        if(!$checkouts = $this->model->find($id))
            return redirect()->route('checkouts.index');

        return view('checkouts.edit', compact('checkouts'));
    }

    public function update(CreateChechkoutFormRequest $Request, $id)
    {
        if (!$checkouts = $this->model->find($id))
            return redirect()->route('checkouts.index');
        $data = $Request->all();

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
