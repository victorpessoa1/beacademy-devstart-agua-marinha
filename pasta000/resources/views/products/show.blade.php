@extends('template.products')
@section('title', $title)
@section('body')

<div class="container">
    <h1>Produtos {{ $products->name }}</h1>
    <tbody class="text-center">
        <form class="row g-3">
            <div class="col-md-6">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" value="{{ $product->name }}" readonly>
            </div>
            <div class="col-md-6">
                <label for="name" class="form-label">Descrição</label>
                <input type="text" class="form-control" id="name" value="{{ $products->description }}" readonly>
            </div>
            <div class="col-md-6">
                <label for="name" class="form-label">Quantidade</label>
                <input type="text" class="form-control" id="name" value="{{ $products->quantity }}" readonly>
            </div>
            <div class="col-md-6">
                <label for="name" class="form-label">Preço</label>
                <input type="text" class="form-control" id="name" value="{{ $products-price }}" readonly>
            </div>
            <div class="col-md-6">
                <label for="name" class="form-label">Preço de Venda</label>
                <input type="text" class="form-control" id="name" value="{{ $products->saleprice }}" readonly>
            </div>
        </form>

        <div class="col-md-3 mt-5">
            <table class="table">
                <tr>
                    <th scope="col"><a href="{{ route('products.edit', $products->id) }}" class="btn btn-sm btn-warning text-white">Editar </a></th>
                    <th scope="col">
                        <form action="{{ route('products.destroy', $products->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger text-white">Excluir </button>
                        </form>
                    </th>
                </tr>



        </div>
        @endsection