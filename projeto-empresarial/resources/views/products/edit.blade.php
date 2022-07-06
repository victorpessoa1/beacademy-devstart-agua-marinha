@extends('template.app')
@section('title', "Edditar {$products->name}")
@section('body')

    @if($errors->any())
    <div class='alert alert-danger' role="alert">
        @foreach($errors->all() as $error)
        {{ $error }}<br>
        @endforeach
    </div>
    @endif

<form action="{{ route('products.update', $products->id) }}" method="POST">
@method('PUT')
@csrf
    <div class="row mt-5">
        <div>
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div>
            <label for="quantity">Quantidade</label>
            <input type="text" name="quantity" id="quantity" class="form-control">
        </div>
    <div>
        <label for="price">Preço</label>
        <input type="text" name="price"  id="price" class="form-control">
    </div>
    <div>
        <label for="sale-price">Preço de venda</label>
        <input type="text" name="sale_price" id="sale_price" class="form-control">
    </div>
    <div>
        <label for="photo">Foto</label>
        <input type="text" name="photo" id="photo"  class="form-control">
    </div>
    <div>
        <label for="description">Descrição</label>
        <input type="text" name="description" id="description" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary mt-4">Atualizar</button>
</form>
@endsection