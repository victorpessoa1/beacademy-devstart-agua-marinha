@extends('template.products')
@section('title', 'Listagem de Usuários')
@section('body')

    <h1>Listagem de Usuários</h1>
    @if(session()->has('create'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Atenção!</strong> {{ session()->get('create') }}.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if(session()->has('edit'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Atenção!</strong> {{ session()->get('edit') }}.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if(session()->has('destroy'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Atenção!</strong> {{ session()->get('destroy') }}.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
    @if(Auth::user()->is_admin == 1)
    <a href="{{ route('users.create') }}" class="btn btn-sm btn-outline-primary">Novo Usuário</a>
    @endif
    <table class="table">
        <thead class="text-center">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
            <th scope="col">Data Cadastro</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>
        <tbody class="text-center">
        @foreach($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ date('d/m/Y - H:i', strtotime($user->created_at)) }}</td>
                <td><a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-outline-primary">Visualizar </a> </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
