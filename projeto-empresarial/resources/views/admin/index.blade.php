@extends('template.users')
@section('title', 'Listagem de Usuários')
@section('body')
    <div class="card mt-3" style="width: 18rem;">
        <img src="{{ asset('storage/profile/biticoin.jpg') }}" class="card-img-top" alt="dash">
        <div class="card-body">
            <h5 class="card-title">Bem vindo ao Dashboad</h5>
            <p class="card-text">#Projeto Empresarial - PayLivre</p>
        </div>
    </div>
@endsection
