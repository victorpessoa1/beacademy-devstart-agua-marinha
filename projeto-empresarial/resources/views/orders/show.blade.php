@extends('template.products')
@section('title',"Listagem de Pedidos do {$user->name}")
@section('body')

    <h1>Pedidos de {{$user->name}}</h1>

    @foreach($orders as $order)
        <div class="mb-3">
            <label class="form-label">Produto:<br><b>{{ $order->product->description }}</b></label>
            <br>
            <label class="form-label">Quantidade:<br><b>{{ $order->quantity }}</b></label>
            <br>
        </div>
    @endforeach

@endsection
