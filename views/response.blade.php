@extends('layouts.wrapper')

@section('link_css')
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css"
          integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="{{asset('style.css')}}">
@endsection

@section('title')
    ITShop
@endsection

@section('content')
    <section class="response">
        <div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
            @foreach($comments as $com)
                <div class="gallery-cell text-center">
                    <div class="gallery-text">{{$com->text}}</div>
                    <div class="gallery-avatar text-center">
                        <img src="{{asset('images/avatar.svg')}}" alt="">
                    </div>
                    <div class="gallery-name">{{$com->username}}</div>
                    <div class="gallery-time">тільки що</div>
                </div>
            @endforeach
            <div class="gallery-cell text-center">
                <div class="gallery-text">Заказываю на этом сайте не первый раз,
                    очень довоен обслуживанием и компенсацией консультантов, рекомендую</div>
                <div class="gallery-avatar text-center">
                    <img src="{{asset('images/avatar.svg')}}" alt="">
                </div>
                <div class="gallery-name">James Dowd</div>
                <div class="gallery-time">16 годин тому</div>
            </div>
            <div class="gallery-cell text-center">
                <div class="gallery-text">Заказываю на этом сайте не первый раз,
                    очень довоен обслуживанием и компенсацией консультантов, рекомендую</div>
                <div class="gallery-avatar text-center">
                    <img src="{{asset('images/avatar.svg')}}" alt="">
                </div>
                <div class="gallery-name">James Dowd</div>
                <div class="gallery-time">16 годин тому</div>
            </div>
            <div class="gallery-cell text-center">
                <div class="gallery-text">Заказываю на этом сайте не первый раз,
                    очень довоен обслуживанием и компенсацией консультантов, рекомендую</div>
                <div class="gallery-avatar text-center">
                    <img src="{{asset('images/avatar.svg')}}" alt="">
                </div>
                <div class="gallery-name">James Dowd</div>
                <div class="gallery-time">16 годин тому</div>
            </div>
        </div>
        <div class="comm row">
            <h3 class="col-12">
                Відгуки
            </h3>

            @foreach($comments as $com)
                <div class="avatar col-1">
                    <img src="{{asset('images/avatar.svg')}}" alt="">
                </div>
                <div class="comment col-11">
                    <img class="desktop" src="{{asset('images/message')}}.svg" alt="" style="width:100%;">
                    <img class="mobile" src="{{asset('images/message-mobile.svg')}}" alt="" style="width:100%;">
                    <img class="tablet" src="{{asset('images/message-tablet.svg')}}" alt="" style="width:100%;">
                    <div class="name">{{$com->username}}</div>
                    <div class="time">тільки що</div>
                    <div class="text">{{$com->text}}</div>
                </div>
            @endforeach
            <div class="avatar col-1">
                <img src="{{asset('images/avatar.svg')}}" alt="">
            </div>
            <div class="comment col-11">
                <img class="desktop" src="{{asset('images/message.svg')}}" alt="" style="width:100%;">
                <img class="mobile" src="{{asset('images/message-mobile.svg')}}" alt="" style="width:100%;">
                <img class="tablet" src="{{asset('images/message-tablet.svg')}}" alt="" style="width:100%;">
                <div class="name">James Dowd</div>
                <div class="time">16 годин тому</div>
                <div class="text">Заказываю на этом сайте не первый раз,
                    очень довоен обслуживанием и компенсацией консультантов, рекомендую</div>
            </div>
            <div class="avatar col-1">
                <img src="{{asset('images/avatar.svg')}}" alt="">
            </div>
            <div class="comment col-11">
                <img class="desktop" src="{{asset('images/message.svg')}}" alt="" style="width:100%;">
                <img class="mobile" src="{{asset('images/message-mobile.svg')}}" alt="" style="width:100%;">
                <img class="tablet" src="{{asset('images/message-tablet.svg')}}" alt="" style="width:100%;">
                <div class="name">James Dowd</div>
                <div class="time">16 годин тому</div>
                <div class="text">Заказываю на этом сайте не первый раз,
                    очень довоен обслуживанием и компенсацией консультантов, рекомендую</div>
            </div>
            <div class="avatar col-1">
                <img src="{{asset('images/avatar.svg')}}" alt="">
            </div>
            <div class="comment col-11">
                <img class="desktop" src="{{asset('images/message.svg')}}" alt="" style="width:100%;">
                <img class="mobile" src="{{asset('images/message-mobile.svg')}}" alt="" style="width:100%;">
                <img class="tablet" src="{{asset('images/message-tablet.svg')}}" alt="" style="width:100%;">
                <div class="name">James Dowd</div>
                <div class="time">16 годин тому</div>
                <div class="text">Заказываю на этом сайте не первый раз,
                    очень довоен обслуживанием и компенсацией консультантов, рекомендую</div>
            </div>

            <h3 class="col-12">
                Залишити відгук
            </h3>
            <form class="form-signin" action="{{route('comments')}}" method="post">
                @csrf
                <p class="col-12"><a href="#">Авторизуйтесь</a> або введіть контакні дані</p>
                <label class="col-5">
                    <input type="text" name="username" class="form-control" placeholder="Ім'я користувача" required>
                </label>
                <label class="col-5">
                    <input type="email" name="email" class="form-control" placeholder="Емейл" required>
                </label>
                <label class="col-10">
                    <textarea rows="4" cols="50" style="height: 120px;" name="text" class="form-control" placeholder="Текст" required></textarea>
                </label>
                <button name="send" class="btn"><img src="{{asset('images/buttonlogo.svg')}}" alt="" style="height: 30px; width: 30px;">
                    <img src="public/images/line.svg" alt="" style="margin: 0 20px 0 20px; height: 30px;">Відправити
                </button>
            </form>
        </div>
    </section>
@endsection
