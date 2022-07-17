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

    <form action="{{ route('checkouts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="user_id" class="form-label">Id do Usuário</label>
            <input type="text" class="form-control" id="user_id" name="user_id" value="{{$user->id}}">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Nome da Crypto</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div>
            <label for="description" class="form-label">Descrição</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
        <div>
            <label for="quantity" class="form-label">Quantidade</label>
            <input type="text" class="form-control" id="quantity" name="quantity">
        </div>
        <div>
            <label for="saleprice" class="form-label">Preço</label>
            <input type="number" class="form-control" id="saleprice" name="saleprice">
        </div>
        <div>
            <label for="amount" class="form-label">Preço Total</label>
            <input type="text" class="form-control" id="amount" name="amount">
        </div>
        <button type="submit" class="btn btn-sm btn-outline-primary mt-3">Confirmar</button>
        <button type="submit" class="btn btn-sm btn-outline-primary mt-3">Cancelar</button>
    </form>
@endsection
