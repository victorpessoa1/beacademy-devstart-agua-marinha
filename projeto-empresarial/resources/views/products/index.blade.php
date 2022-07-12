@extends('template.products')
@section('title', 'Listagem de Ativos')
@section('body')

    <h1>Listagem de Ativos</h1>

<a href="{{ route('products.create') }}" class="btn btn-sm btn-outline-primary mb-3">Adicionar Novos Produtos</a>
<table class="table table-hover">
    <thead class="text-center">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Imagem</th>
            <th scope="col">Nome</th>
            <th scope="col">Descrição</th>
            <th scope="col">Quantidade</th>
            <th scope="col">Preço</th>
            <th scope="col">Preço de Venda</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach ($products as $product)
            <tr>
            @if($product->image)
                 <th><img src=" {{ asset('storage/' .$product->image)}}" width="50px" height="50px" class="rounded-circle"/></th>
                @else
                  <th><img src=" {{ asset('storage/ .$profile/bitcoin.png') }}" width="50px" heidght="50px" class="rounded-circle"></th>
                @endif
                <th scope="row">{{ $product->id }}</th>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->saleprice }}</td>
                <td>
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-outline-primary">Visualizar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
