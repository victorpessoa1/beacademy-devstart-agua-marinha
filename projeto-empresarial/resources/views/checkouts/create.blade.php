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
            <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
        </div>
        <div class="mb-3">
            <label for="product_id" class="form-label">Id do Produto</label>
            <input type="text" class="form-control" id="product_id" name="product_id" value="{{$product->id}}">
        </div>
        <div>
            <label for="quantity" class="form-label">Quantidade</label>
            <input type="number" class="form-control" id="quantity" name="quantity"  value="{{$product->quantity}}">
        </div>
        <div>
            <label for="amount" class="form-label">Preço Total</label>
            <input type="number" class="form-control" id="amount" name="amount" value="{{$product->amount}}">
        </div>
        <div>
            <label for="statuspayment" class="form-label">Status</label>
            <input type="text" class="form-control" id="statuspayment" name="statuspayment" value="Aguardando">
        </div>
        <button type="submit" class="btn btn-sm btn-outline-primary mt-3">Confirmar</button>
        <button type="submit" class="btn btn-sm btn-outline-primary mt-3">Cancelar</button>
    </form>
@endsection
