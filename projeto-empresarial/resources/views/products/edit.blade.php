 @extends('template.app')
@section('title', "Editar {$products->name}")
@section('body')

<h1>Editar Produtos: {{ $product->id ." - ". $product->name }}</h1>
    @if($errors->any())
    <div class='alert alert-danger' role="alert">
        @foreach($errors->all() as $error)
        {{ $error }}<br>
        @endforeach
    </div>
    @endif

<form action="{{ route('products.update', $products->id) }}" method="POST">
@method('PUT')
@csrf
    <div class="row mt-5">
            <label for="name" class="form-label">Nome</label>
            <input type="text" id="name" class="form-control" name="name">
        </div>
        <div>
            <label for="quantity" class="form-label">Quantidade</label>
            <input type="text" class="form-control" id="quantity" name="quantity">
        </div>
    <div>
        <label for="price" class="form-label">Preço</label>
        <input type="text" class="form-control" id="price" name="price">
    </div>
    <div>
        <label for="sale-price" class="form-label">Preço de venda</label>
        <input type="text" class="form-control" id="sale_price" name="sale_price">
    </div>
    <div>
        <label for="photo" class="form-label">Foto</label>
        <input type="text" class="form-control" id="photo" name="photo">
    </div>
    <div>
        <label for="description" class="form-label">Descrição</label>
        <input type="text" class="form-control" id="description" name="description">
    </div>
    <div>
          <label for="image" class="form-label">Selecione uma imagem</label>
          <input type="file" class="form-control" id="image" name="image"/>
      </div>
    <button type="submit" class="btn btn-primary mt-4">Atualizar</button>
</form>
@endsection