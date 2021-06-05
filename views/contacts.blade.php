@extends('layouts.wrapper')

@section('link_css')
    <link rel="stylesheet" href="css/contacts.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
@endsection

@section('title')
    ITShop
@endsection

@section('content')
<section class="contacts">
    <div class="row">

        <div class="col-6 column-left">
            <div class="col_intro">
                <div class="location row-1">
                    <div class="row">
                        <a href="#" class="logo">
                            <img src="{{asset('images/Location.svg')}}" alt="">
                        </a>
                        <h3>Розташування</h3>
                    </div>
                    <p> Київ (м. Шулявська)<br>бул. Вацлава Гамена, 2</p>
                </div>

                <div class="phone row-2">
                    <div class="row">
                        <a href="#" class="logo">
                            <img src="{{asset('images/phone.svg')}}" alt="">
                        </a>
                        <h3>Телефон</h3>
                    </div>
                    <p>+38(066)712-88-42</p>
                </div>

                <div class="mail row-3">
                    <div class="row">
                        <a href="#" class="logo">
                            <img src="{{asset('images/mail.svg')}}" alt="">
                        </a>
                        <h3>Пошта</h3>
                    </div>
                    <p>itshop@gmail.com</p>
                </div>

            </div>
        </div>
        <div class="col-6">

            <form class="form-signin" action="{{route('send')}}" method="post">
                @csrf
                <h2>
                    Надіслати повідомлення
                </h2>
                <label class="col-12">
                    <input type="text" name="username" class="form-control" placeholder="Ім'я користувача" required>
                </label>
                <label class="col-12">
                    <input type="email" name="email" class="form-control" placeholder="Емейл" required>
                </label>
                <label class="col-12">
                    <textarea rows="4" cols="50" style="height: 120px;" name="text" class="form-control" placeholder="Текст" required></textarea>
                </label>
                <button type="submit" name="sendButton" class="btn">Надіслати</button>
            </form>

        </div>

    </div>
</section>
@endsection
