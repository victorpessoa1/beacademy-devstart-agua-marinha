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
        @foreach($products as $dataProduct)
            <tr>
                @if($dataProduct->image)
                 <th><img src=" {{ asset('storage/' .$$dataProduct->image)}}" width="50px" height="50px" class="rounded-circle"/></th>
                @endif
                <th scope="row">{{ $dataProduct->id }}</th>
                <td>{{ $dataProduct->name }}</td>
                <td>{{ $dataProduct->description }}</td>
                <td>{{ $dataProduct->quantity }}</td>
                <td>{{ $dataProduct->price }}</td>
                <td>{{ $dataProduct->saleprice }}</td>
                <td>
                    <a href="{{ route('products.show', $dataProduct->id) }}" class="btn btn-primary">Visualizar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection