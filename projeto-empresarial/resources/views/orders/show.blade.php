@extends('template.products')
@section('title',"Listagem de Pedidos do {$user->name}")
@section('body')

    <h1>Pedidos de {{$user->name}}</h1>


        <div class="mb-3">
            <table class="table table-sm">
                <thead>
                <tr>
                    <th scope="col">Produto</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Valor</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                <tr>
                    <th scope="row">{{ $order->product->description }}</th>
                    <td>{{ $order->quantity }}</td>
                    <td>{{ $order->quantity * $order->product->saleprice}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>


@endsection
