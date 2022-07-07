@extends('template.users')
@section('title', $title)
@section('body')

    <h1>Usuário {{ $user->id ." - ". $user->name }}</h1>

        <tbody class="text-center">
        <form class="row g-3">
            <div class="col-md-6">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" value="{{ $user->name }}" readonly>
            </div>
            <div class="col-md-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" value="{{ $user->email }}" readonly>
            </div>
            <div class="col-md-4">
                <label for="address" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="address" value="{{ $user->address }}" readonly>
            </div>
            <div class="col-md-2">
                <label for="phone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="phone" value="{{ $user->phone }}" readonly>
            </div>
            <div class="col-md-2">
                <label for="dtbirth" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="dtbirth" value="{{ $user->dtbirth }}" readonly>
            </div>
            <div class="col-md-2">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" id="cpf" value="{{ $user->cpf }}" readonly>
            </div>
            <div class="col-md-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="type" value="{{ $user->type == 1 ? 'Admin' : 'Usuário' }}" readonly>
        </form>

        <div class="container col-md-3">
                <table class="table">
                        <tr>
                            <th scope="col"><a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-warning text-white">Editar </a></th>
                            <th scope="col">
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger text-white">Excluir </button>
                                </form>
                            </th>
                        </tr>
                </table>
        </div>
        </tbody>

@endsection
