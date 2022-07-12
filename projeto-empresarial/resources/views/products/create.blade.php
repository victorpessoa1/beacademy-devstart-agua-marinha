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

<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div class="mb-3">
    <label for="name" claa="form-label">Nome da Crypto</label>
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
    <input type="text" class="form-control" id="saleprice" name="saleprice">
  </div>
  <div>
    <label for="image" class="form-label">Selecione uma imagem</label>
    <input type="file" class="form-control" id="image" name="image" />
  </div>
  <button type="submit" class="btn btn-sm btn-outline-primary mt-3">Cadastrar</button>
  <button type="submit" class="btn btn-sm btn-outline-primary mt-3">Cancelar</button>
</form>
@endsection
