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
                <th scope="col">Descrição</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Preço</th>
                <th scope="col">Preço de Venda</th>
                <th scope="col" colspan="2" >Ações</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr>
                <th scope="row">{{ $products->id }}</th>
                <td>{{ $products->name }}</td>
                <td>{{ $products->description }}</td>
                <td>{{ $products->quantity }}</td>
                <td>{{ $products->price }}</td>
                <td>{{ $products->saleprice }}</td>
                @if (Auth::user()->is_admin == 1)
                <td>
                    <a href="{{ route('products.edit', $products->id) }}" class="btn btn btn-sm btn-outline-primary">Editar</a>
                </td>
                <td>
                       <form action="{{ route('products.destroy', $products->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                        <button type="submit" class="btn btn-sm btn-outline-primary">Deletar</button>
                     </form>
                </td>
                @endif
                <td>

                    <a href="{{ route('orders.create', ['id' => $products->id ]) }}" class="btn btn btn-sm btn-outline-primary">Comprar</a>

                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
