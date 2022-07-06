@extends('template.app')
@section('title', 'Novos Produtos')
@section('body')

  <h1 class="text-center mt-4 text-success">CADASTRO DE PRODUTOS</h1>
  @if($erros->any())
      <div class="alert alert-successs" role="alert">
        @foreach($erros->all()) as $erros)
          {{ $error}}
        @endforeach
      </div>

      @endif

  <form action="{{ route('products.create') }}" method="POST">
    @csrf
        <div>
            <label for="name">Nome</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div>
            <label for="name">Descrição</label>
            <input type="text" name="description" id="description" class="form-control">
        </div>
        <div>
            <label for="name">Quantidade</label>
            <input type="text" name="quantity" id="quantity" class="form-control">
        </div>
        <div>
            <label for="name">Preço</label>
            <input type="text" name="price" id="price" class="form-control">
        </div>
        <div>
            <label for="name">Preço de Venda</label>
            <input type="text" name="sale_price" id="sale_price" class="form-control">
        </div>
        <div>
            <label for="name">Foto</label>
            <input type="text" name="photo" id="photo" class="form-control">
        </div>
        <button type="submit" class="btn btn-outline-dark">Cadastrar</button>
        <button class="btn btnoutline-dark"><a href="#" class="text-success">Cancelar</a></button>
  </form>
@endsection