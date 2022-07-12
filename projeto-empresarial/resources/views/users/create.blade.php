@extends('template.users')
@section('title', 'Novo Usuário')
@section('body')


    <h1>Novo Usuário</h1>

    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
        </div>
    @endif

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="Nome">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="phone" name="phone">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="address" name="address">
        </div>
        <div class="mb-3">
            <label for="dtbirth" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" id="dtbirth" name="dtbirth">
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <select class="form-select" aria-label="Default select example" id="type" name="type">
                <option selected>Escolha o tipo do usuário</option>
                <option value="1">Admin</option>
                <option value="2">Comum</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <button type="submit" class="btn btn-outline-primary">Enviar</button>
    </form>

@endsection
