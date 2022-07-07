@extends('template.users')
@section('title', $title)
@section('body')

<h1>Produtos {{ $products->id ." - ". $products->name }}</h1>
<br>
<tbody class="text-center">
    <form class="row g-3">
        <div class="row mt-5">
            <label for="name" class="form-label">Nome</label>
            <input type="text" id="name" class="form-control" name="name" value="{{ $products->name}}" readonly>
        </div>
        <div>
            <label for="quantity" class="form-label">Quantidade</label>
            <input type="text" class="form-control" id="quantity" name="quantity" value="{{ $products->quantity }}" readonly>
        </div>
        <div>
            <label for="price" class="form-label">Preço</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $price }}" readonly>
        </div>
        <div>
            <label for="sale-price" class="form-label">Preço de venda</label>
            <input type="text" class="form-control" id="sale_price" name="sale_price" value="{{ $saleprice }}" readonly>
        </div>
        <div>
            <label for="photo" class="form-label">Foto</label>
            <input type="text" class="form-control" id="photo" name="photo" value="{{ $photo }}" readonly>
        </div>
        <div>
            <label for="description" class="form-label">Descrição</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ $descripton }}" readonly>
        </div>
    </form>
    <div class="col-md-3 mt-5">
        <table class="table">
            <tr>
                <th scope="col"><a href="{{ route('products.edit', $products->id) }}" class="btn btn-sm btn-warning text-white">Editar </a></th>
                    <form action="{{ route('products.destroy', $products->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger text-white">Excluir</button>
                    </form>
                </th>
            </tr>
        </table>
    </div>
</tbody>
@endsection
