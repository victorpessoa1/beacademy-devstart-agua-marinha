@extends('template.users_login')
@section('title', 'Login')
@section('body')
    



    <div class="justify-content-center">


        <div class="card mb-3">
            <div class="row g-0 d-flex align-items-center">
              <div class="col-lg-4 d-none d-lg-flex">
                <img src="{{ asset('storage/profile/btc.jpg') }}" width="370px" height="500px" alt="...">
              </div>

                <div class="col-lg-7">
                <div class="card-body py-5 px-md-5">


        <form method="POST" action="{{ route('login') }}">
            @csrf
            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example1">Email</label>
                <input type="email" id="form2Example1" class="form-control" name="email" placeholder="Informe seu Email"/>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example2">Senha</label>
                <input type="password" id="form2Example2" class="form-control" name="password" placeholder="Informe sua senha"/>
            </div>
            <div class="col mb-5">
                <!-- Simple link -->
                <a href="{{ route('password.request') }}">Esqueceu a Senha?</a>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Entrar</button>
        </form>
    </div>

@endsection