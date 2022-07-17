@extends('template.products')
@section('title', 'Listagem de Pedidos')
@section('body')

    <h1>Listagem de Pedidos</h1>

    <table class="table">
        <thead class="text-center">
        <tr>

            <th scope="col">Id</th>
            <th scope="col">Usuário</th>
            <th scope="col">Produto</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Preço de Venda</th>
            <th scope="col">Preço Total</th>
            <th scope="col">Data Cadastro</th>

        </tr>
        </thead>
        <tbody class="text-center">
        @foreach($checkouts as $checkout)
            <tr>
                <th scope="row">{{ $checkout->id }}</th>
                <td>{{ $checkout->user->name }}</td>
                <td>{{ $checkout->product->description }}</td>
                <td>{{ $checkout->quantity }}</td>
                <td>{{ $checkout->saleprice }}</td>
                <td>{{ $checkout->saleprice * $checkout->quantity }}</td>
                <td>{{ date('d/m/Y - H:i', strtotime($checkout->created_at)) }}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="justify-content-center pagination">

    </div>

@endsection
