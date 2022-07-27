@extends('template.products')
@section('title', 'Listagem de Pedidos')
@section('body')

    <h1>Listagem de Pedidos</h1>
    @if(session()->has('create'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Atenção!</strong> {{ session()->get('create') }}.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if(session()->has('edit'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Atenção!</strong> {{ session()->get('edit') }}.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if(session()->has('destroy'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Atenção!</strong> {{ session()->get('destroy') }}.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
    <table class="table">
        <thead class="text-center">
        <tr>

            <th scope="col">Id</th>
            <th scope="col">Usuário</th>
            <th scope="col">Produto</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Preço Total</th>
            <th scope="col">Criado em</th>

        </tr>
        </thead>
        <tbody class="text-center">
        @foreach($orders as $order)
            <tr>
                <th scope="row">{{ $order->id }}</th>
                <td>{{ $order->user->name }}</td>
                <td>{{ $order->product->description }}</td>
                <td>{{ $order->quantity }}</td>
                <td>{{ $order->product->saleprice * $order->quantity }}</td>
                <td>{{ date('d/m/Y - H:i', strtotime($order->created_at)) }}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="justify-content-center pagination">

    </div>

@endsection
