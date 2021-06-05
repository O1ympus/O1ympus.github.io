@extends('layouts.wrapper')
@section('link_css')
    <link rel="stylesheet" href="css/login.css">
@endsection
@section('content')
<div class="login">
    <div class="square"><img src="images/Group 33.svg" alt="" height="300px"></div>
    <div class="entering">
        <h3>Авторизація</h3>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <input id="email" type="email" placeholder="Емейл" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Пароль">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <button class="button button_login" type="submit">Увійти</button>
            <p>Ви ще не зареєстровані?</p>
            <a href="register"><p class="create_acc"><span>Створити аккаунт</span><img src="images/right-arrow 1.svg" alt="" height="18px"></p></a>
        </form>
    </div>
</div>
@endsection

