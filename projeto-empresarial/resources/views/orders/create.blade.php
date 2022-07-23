@extends('template.products')
@section('title', 'Novos Pedidos')
@section('body')


    <h1>Novo Pedido</h1>
    @if($errors->any())
        <div class="alert alert-successs" role="alert">
            @foreach($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
        </div>

    @endif

    <form action="{{ route('orders.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
{{--            <label for="user_id" class="form-label">Id do Usuário</label>--}}
            <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ Auth::user()->id }}" readonly>
        </div>
        <div class="mb-3">
{{--            <label for="product_id" class="form-label">Id do Produto</label>--}}
            <input type="hidden" class="form-control" id="product_id" name="product_id" value="{{$product->id}}" readonly>
        </div>
        <div class="mb-3">
            <label for="product_name" class="form-label">Nome do Produto</label>
            <input type="text" class="form-control" id="product_name" name="product_name" value="{{$product->name}}" readonly>
        </div>
        <div class="mb-3">
            <label for="product_saleprice" class="form-label">Preço Produto</label>
            <input type="text" class="form-control" id="product_saleprice" name="product_saleprice" value="{{$product->saleprice}}" readonly>
        </div>
        <div>
            <label for="quantity" class="form-label">Quantidade</label>
            <input type="number" class="form-control" id="quantity" name="quantity">
        </div>
        <button type="submit" class="btn btn-sm btn-outline-primary mt-3">Confirmar</button>
        <button type="submit" class="btn btn-sm btn-outline-primary mt-3">Cancelar</button>
    </form>
@endsection
