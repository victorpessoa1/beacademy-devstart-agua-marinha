@extends('template.products')
@section('title', 'Listagem de Ativos')
@section('body')

<h1>Listagem de Ativos</h1>
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
@if(Auth::user()->is_admin == 1)
<a href="{{ route('products.create') }}" class="btn btn-sm btn-outline-primary mb-3">Adicionar Novos Produtos</a>
@endif
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
            <th scope="row">{{ $product->id }}</th>
            <figure class="figure">
            <th><img class="figure-img img-fluid rounded" src="{{ asset('storage/' . $product->image) }}" width="80" alt="..."></th>
            <figcaption class="figure-caption"></figcaption>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->quantity }}</td>
            <td>R$ {{ $product->price }}</td>
            <td>R$ {{ $product->saleprice }}</td>
            <td>
                <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-outline-primary">Visualizar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection