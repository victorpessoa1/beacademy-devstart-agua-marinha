@extends('template.users_login')
@section('title', 'Login')
@section('body')

    <div class="justify-content-center">

        <div class="card mb-3">
            <div class="row g-0 d-flex align-items-center">
              <div class="col-lg-4 d-none d-lg-flex">
                <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" alt="Trendy Pants and Shoes"
                  class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
              </div>
              <div class="col-lg-8">
                <div class="card-body py-5 px-md-5">
                    <h2 class="text-center">Login</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="email">Email</label>
                <input type="email" id="email" class="form-control" name="email" placeholder="Informe seu Email"/>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="password">Senha</label>
                <input type="password" id="password" class="form-control" name="password" placeholder="Informe sua senha"/>
            </div>
            <div class="col mb-5">
                <!-- Simple link -->
                <a href="{{ route('password.request') }}">Esqueceu a Senha?</a>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Entrar</button>
            <a href="{{ route('register') }}" class="btn btn-primary btn-block mb-4">Registrar-se</a>
        </form>

    </div>

@endsection
