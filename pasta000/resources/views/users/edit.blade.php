@extends('template.users')
@section('title', "Usuário {$user->name}")
@section('body')

    <h1>Editar Usuário: {{ $user->id ." - ". $user->name }}</h1>
<br>
    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $error)
                {{ $error }} <br>
            @endforeach
        </div>
    @endif

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ $user->address }}">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <a href="{{ route('users.index', $user->id) }}" class="btn btn-sm btn-primary text-white">Voltar </a>
        <button type="submit" class="btn btn-success btn-sm">Atualizar</button>
    </form>

@endsection
