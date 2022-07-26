<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductFormRequest;
use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function __construct(Product $product)
    {
        $this->model = $product;
    }

    public function index(Request $request)
    {
        $products = Product::all();

         return view('products.index', compact('products'));
    }

    public function show($id)
    {
        if(!$products = Product::find($id))
          return redirect()->route('products.index');

        $title = 'Produto ' .$products->name;

        return view('products.show', compact('products', 'title'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(CreateProductFormRequest $Request)
    {
      $data = $Request->all();
      if($Request->image){
        $file = $Request['image'];
        $path = $file->store('profile', 'public');
        $data['image'] = $path;
      }

      $this->model->create($data);

      $Request->session()->flash('create', 'Produto cadastrado com sucesso!');
  
      return redirect()->route('products.index');
    }

    public function edit($id)
    {
      if(!$products = $this->model->find($id)) 
        return redirect()->route('products.index');

      return view('products.edit', compact('products'));
    }

    public function update(CreateProductFormRequest $Request, $id)
    {
      if (!$products = $this->model->find($id)) 
        return redirect()->route('products.index');
      $data = $Request->all();

      if ($Request->password) 
        $data['password'] = bcrypt($Request->password);
      $products->update($data);
    
  
      return redirect()->route('products.index')->with('edit', 'Produto atualizados com sucesso!');
    }

    public function destroy($id)
    {
      if (!$products = $this->model->find($id))
        return redirect()->route('products.index');
  
        $products->delete();
  
      return redirect()->route('products.index')->with('destroy', 'Produto deletado com sucesso!');
    }
  }
