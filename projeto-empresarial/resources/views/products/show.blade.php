@extends('template.app')
@section('title', $title)
@section('body')

<h1 class='text-primary my-4'>Listagem de {{$products->name}} </h1>
        <table class="table table-striped">
   <thead>
        <tr>
        <th scope="col">ID</th>
            <th scope="col">Nome</th>            
            <th scope="col">Quantidade</th>
            <th scope="col">Preço</th>
            <th scope="col">Preço de venda</th>
            <th scope="col">Foto</th>
            <th scope="col">descrição</th>
            <th scope="col" colspan="2">Ações</th>
        </tr>
  </thead>

  <tbody>
           
           <tr>
              <th scope="row">{{ $products->id }}</th>
                  <td>{{ $dataProducts->name }}</td>
                  <td>{{ $dataProducts->quantity }}</td>
                  <td>{{ $dataProducts->price }}</td>
                  <td>{{ $dataProducts->sale_price }}</td>
                  <td>{{ $dataProducts->photo }}</td>
                  <td>{{ $dataProducts->description }}</td>
              <td>
                 <a href="{{ route('products.edit', $products->id) }}" class='btn btn-warning'>Editar</a> </td>
              <td> 
                <form action="{{route('products.destroy', $products->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class='btn btn-danger'>Excluir</button> 
                </form>
                </td>
          </tr>
  </tbody>
</table>     
@endsection