@extends('template.products')
@section('title',"Listagem de Pedidos do {$user->name}")
@section('body')

    <h1>Pedidos do {{$user->name}}</h1>

    @foreach($checkouts as $checkout)
        <div class="mb-3">
            <label class="form-label">Pedidos Nº:<br><b>{{ $checkout->id }}</b></label>
            <br>
            <label class="form-label">Status:<br><b>{{ $checkout->statuspayment?'Aguardando':'Finalizado' }}</b></label>
            <br>
            <label class="form-label">Produto:<br><b>{{ $checkout->product->description }}</b></label>
            <br>
            <label class="form-label">Quantidade:<br><b>{{ $checkout->quantity }}</b></label>
            <br>
            <label class="form-label">Preço Total:<br><b>{{ $checkout->amount }}</b></label>
            <br>

        </div>
    @endforeach

@endsection
