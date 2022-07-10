@extends('template.products')
@section('title', 'Listagem de Ativos')
@section('body')

    <h1>Listagem de Ativos</h1>

<a href="{{ route('products.create') }}" class="btn btn-success btn-sm mb-3">Adicionar Novos Produtos</a>
<table class="table table-dark table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">IMAGEM</th>
            <th scope="col">NOME</th>
            <th scope="col">DESCRIÇÃO</th>
            <th scope="col">QUANTIDADE</th>
            <th scope="col">PREÇO</th>
            <th scope="col">PREÇO DE VENDA</th>
            <th scope="col">AÇÕES</th>
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach($products as $product)
            <tr>
                @if($products->image)
                 <th><img src=" {{ asset('storage/' .$products->image)}}" width="50px" height="50px" class="rounded-circle"/></th>
                @else
                  <th><img src=" {{ asset('storage/ .$profile/bitcoin.png') }}" width="50px" heidght="50px" class="rounded-circle"></th>
                @endif
                <th scope="row">{{ $products->id }}</th>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->saleprice }}</td>
                <td>
                    <a href="{{ route('products.show', $products->id) }}" class="btn btn-primary">Visualizar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection