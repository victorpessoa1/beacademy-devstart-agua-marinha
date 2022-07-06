@extends('template.app')
@section('title', 'Listagem de Ativos')

@section('content')
<table class="table table-dark table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">#ID</th>
            <th scope="col">IMAGEM</th>
            <th scope="col">NOME</th>
            <th scope="col">DESCRIÇÃO</th>
            <th scope="col">QUANTIDADE</th>
            <th scope="col">PREÇO</th>
            <th scope="col">PREÇO DE VENDA</th>
            <th scope="col">AÇÕES</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($product as $dataProduct)
            <tr>
                <th scope="row">{{ $dataProduct->id }}</th>
                <td><img src="{{ $dataProduct->photo }}" width='80px'></td>
                <td>{{ $dataProduct->name }}</td>
                <td>{{ $dataProduct->description }}</td>
                <td>{{ $dataProduct->quantity }}</td>
                <td>{{ $dataProduct->price }}</td>
                <td>{{ $dataProduct->saleprice }}</td>

                <td>

                    <a href="" class="btn btn-primary">Visualizar</a>

                </td>
            </tr>
        @endforeach

    </tbody>
</table>

@endsection
