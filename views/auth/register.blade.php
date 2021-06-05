@extends('layouts.wrapper')

@section('link_css')
    <link rel="stylesheet" href="css/registration.css">
@endsection
@section('content')
<div class="registration">
    <h1>Реєстрація</h1>
    <form class="registration_intro" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="columns">
            <div class="first_inputs_column">
                <div class="form-group">
                    <label for="nickname">Нікнейм</label>
                    <input id="nickname" type="text" class="form-control @error('nickname') is-invalid @enderror" name="nickname" required autocomplete="nickname" placeholder="Нікнейм">
                    @error('nickname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="name">Ім’я</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name" placeholder="Ім’я">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="surname">Прізвище</label>
                    <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" required autocomplete="surname" placeholder="Прізвище">
                    @error('surname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="birthdate">Дата народження</label>
                    <input id="birthdate" type="text" class="form-control @error('birthdate') is-invalid @enderror" name="birthdate" required autocomplete="birthdate" placeholder="2021">
                    @error('birthdate')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="under_form">
                    <button type="submit" class="button button_registration">Зареєструватися</button>
                    <p>Вже зареєструвалися? <a href="login" class="log_in">Увійти</a></p>
                </div>
            </div>
            <div class="second_inputs_column">
                <div class="form-group">
                    <label for="country">Країна</label>
                    <div class="custom-select">
                        <select id="country" name="country" class="form-control">
                            <option value="Australia">Австралія</option>
                            <option value="Austria">Австрія</option>
                            <option value="Belgium">Бельгія</option>
                            <option value="Great Britain">Великобританія</option>
                            <option value="Hungary">Венгрія</option>
                            <option value="Iceland">Ісландія</option>
                            <option value="Norway">Норвегія</option>
                            <option value="Portugal">Португалія</option>
                            <option value="United States">Сполучені Штати Америки</option>
                            <option value="Ukraine">Україна</option>
                        </select>
                    </div>
                    @error('country')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Емейл-адреса</label>
                    <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" placeholder="example@gmal.com">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="password" placeholder="Мінімум 8 символів">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password-confirm">Підтвердження паролю</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="nickname" placeholder="Мінімум 8 символів">
                </div>
            </div>
        </div>
    </form>
</div>
<script src="js/select.js"></script>
@endsection
