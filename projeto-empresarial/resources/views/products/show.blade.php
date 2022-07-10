@extends('template.products')
@section('title', $title)
@section('body')

<div class="container">
    <h1>Produtos {{ $products->name }}</h1>
    <table class="table">
        <thead class="text-center">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">imagem</th>
                <th scope="col">Email</th>
                <th scope="col">Descrição</th>
                <th scope="col">QUANTIDADE</th>
                <th scope="col">PREÇO</th>
                <th scope="col">PREÇO DE VENDA</th>
                <th scope="col">Visualizar</th>
                <th scope="col">Deletar</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr>
                <th scope="row">{{ $products->id }}</th>
                <td>{{ $products->name }}</td>
                <td>{{ $products->imagem }}</td>
                <td>{{ $products->email }}</td>
                <td>{{ $products->description }}</td>
                <td>{{ $products->quantity }}</td>
                <td>{{ $products->price }}</td>
                <td>{{ $products->saleprice }}</td>
                <td>
                    <a href="{{ route('products.edit', $products->id) }}" class="btn btn-warning text-white">Editar</a>
                </td>
                <td>
                       <form action="{{ route('products.destroy', $products->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                        <button type="submit" class="btn btn-sm btn-danger text-white">Deletar</button>
                     </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection