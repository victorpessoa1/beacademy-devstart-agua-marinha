@extends('template.users')
@section('title', $title)
@section('body')

<div class="container">
    <h1>Usuário {{ $user->name }}</h1>
    <table class="table">
        <thead class="text-center">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Descrição</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Preço</th>
                <th scope="col">Preço de Venda</th>
                <th scope="col">Visualizar</th>
                <th scope="col">Deletar</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr>
            <th scope="row">{{ $dataProduct->id }}</th>
                <td>{{ $dataProduct->name }}</td>
                <td>{{ $dataProduct->description }}</td>
                <td>{{ $dataProduct->quantity }}</td>
                <td>{{ $dataProduct->price }}</td>
                <td>{{ $dataProduct->saleprice }}</td>
                <td>
                    <a href="{{ route('products.edit', $products->id) }}" class="btn btn-warning text-white">Editar</a>
                </td>
                <td>
                    <form action="{{ route('products.destroy', $produts->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger text-white">Deletar</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection