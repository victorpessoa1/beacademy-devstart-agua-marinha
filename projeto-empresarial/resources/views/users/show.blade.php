@extends('template.admin')

@section('title', 'Usuário')

@section('content')
<h1 class="text-2xl font-semibold leading-tigh py-2">Dados do Usuário {{ $user->name }}</h1>

<figure class=" rounded-xl p-6 bg-[url('{{ url("background/bg_user.jpg")}}')] bg-no-repeat ">

  <div class="pt-6 text-left space-y-4">
    <figcaption class="font-medium py-2">
        <div class="text-white">
            Código: {{ $user->id }}
        </div>
        <div class="text-white">
            Nome: {{ $user->name }}
        </div>
        <div class="text-white">
            Email: {{ $user->email }}
        </div>
        <div class="text-white">
            Endereço: {{ $user->address }}
        </div>
        <div class="text-white">
            Telefone: {{ $user->phone }}
        </div>
        <div class="text-white">
            Data de Nascimento: {{ formatDate($user->dtbirth) }}
        </div>
    </figcaption>
  </div>
</figure>

<form action="{{ route('users.destroy', $user->id) }}" method="POST" class="py-12">
    @method('DELETE')
    @csrf
    <button type="submit" class="rounded-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4" >Deletar</button>
</form>

@endsection
