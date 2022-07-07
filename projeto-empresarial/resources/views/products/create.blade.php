@extends('template.products')
@section('title', 'Novos Produtos')
@section('body')


<h1>Cadastro de Produto</h1>
  @if($errors->any())
      <div class="alert alert-successs" role="alert">
        @foreach($errors->all() as $error)
          {{ $error }} <br>
        @endforeach
      </div>
      @endif

  <form action="{{ route('products.store') }}" method="POST">
    @csrf
        <div class="mb-3">
            <label for="name" claa="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div>
            <label for="name" class="form-label">Descrição</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
        <div>
            <label for="name" class="form-label">Quantidade</label>
            <input type="text" class="form-control" id="quantity" name="quantity">
        </div>
        <div>
            <label for="name" class="form-label">Preço</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        <div>
            <label for="name" class="form-label">Preço de Venda</label>
            <input type="text" class="form-control" id="sale_price" name="sale_price">
        </div>
        <button type="submit" class="btn btn-outline-dark">Cadastrar</button>
        <button type="submit" class="btn btn-outline-dark">Cancelar</a></button>
  </form>
@endsection