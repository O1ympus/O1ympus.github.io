<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Lato:wght@300;400;700;900&family=Nunito:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/wrapper.css">
    @yield('link_css')
    <title>@yield('title')</title>
</head>
<body>
<header class="header">
    <div class="header_body">
        <div class="brand_name">
            <a href="/"><img src="images/_.svg" alt="" height="30px"></a>
        </div>
        <div class="burger_menu">
            <span></span>
        </div>
        <nav class="nav navigation_bar">
            <ul class="list">
                <li>
                    <a href="/login"><img src="images/Group.svg" alt="" height="24px"> {{ Auth::user()->name ?? 'Увійти'}}
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ Auth::check() == 1 ? __('Logout') : ''}}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                    </a>
                </li>
                <li><a href="/basket"><img src="images/shopping-cart 1.svg" alt="" height="24px"> Кошик</a></li>
                <li class="burger_li"><a href="/">Головна сторінка</a></li>
                <li class="burger_li"><a href="/about-us">Про нас</a></li>
                <li class="burger_li"><a href="/contacts">Контакти</a></li>
                <li class="burger_li"><a href="/response">Відгуки</a></li>
            </ul>
        </nav>
    </div>
</header>
<div class="header_extra">
    <div class="navigation">
        <nav>
            <ul>
                <li><a href="/">Головна сторінка</a></li>
                <li><a href="/about-us">Про нас</a></li>
                <li><a href="/contacts">Контакти</a></li>
                <li><a href="/response">Відгуки</a></li>
            </ul>
        </nav>
    </div>
</div>
    @yield('content')
<footer class="footer">
    <div class="logo_footer"><img src="images/logo_white.svg" alt="" height="50px"></div>
    <div class="info">
        <div class="first_column_nav">
            <h6>Інформація про компанію <img src="images/arrow_down123.svg" alt="" height="10px"></h6>
            <nav class="nav">
                <ul>
                    <li><a href="">Про нас</a></li>
                    <li><a href="">Умови використання сайту</a></li>
                    <li><a href="">Вакансії</a></li>
                    <li><a href="">Контакти</a></li>
                </ul>
            </nav>
            <h6>Cоціальні мережі <img src="images/arrow_down123.svg" alt="" height="10px"></h6>
            <div class="networks">
                <ul>
                    <li><a href=""><img src="images/facebook.svg" alt="" height="25px"></a></li>
                    <li><a href=""><img src="images/twitter.svg" alt="" height="25px"></a></li>
                    <li><a href=""><img src="images/instagram.svg" alt="" height="25px"></a></li>
                    <li><a href=""><img src="images/gmail.svg" alt="" height="25px"></a></li>
                </ul>
            </div>
            <h6 class="second_line itshop_apps">ITShop додатки</h6>
            <div class="apps">
                <div class="app_store"><a href=""></a>
                    <img src="images/apple.svg" alt="" height="32px">
                    <div class="app_text">
                        Завантажити в
                        <h6>App Store</h6>
                    </div>
                </div>
                <div class="google_play"><a href=""></a>
                    <img src="images/google_play.svg" alt="" height="32px">
                    <div class="app_text">
                        Завантажити в
                        <h6>Google Play</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="second_column_nav">
            <h6>Допомога <img src="images/arrow_down123.svg" alt="" height="10px"></h6>
            <nav class="nav">
                <ul>
                    <li><a href="">Оплата</a></li>
                    <li><a href="">Кредит</a></li>
                    <li><a href="">Гарантія</a></li>
                    <li><a href="">Повернення товару</a></li>
                </ul>
            </nav>
            <h6 class="second_line">Сервіси <img src="images/arrow_down123.svg" alt="" height="10px"></h6>
            <nav class="nav">
                <ul>
                    <li><a href="">ITShop Обмін</a></li>
                    <li><a href="">Бонусний рахунок</a></li>
                    <li><a href="">ITShop Premium</a></li>
                    <li><a href="">Подарункові сертифікати</a></li>
                </ul>
            </nav>
        </div>
        <div class="last_column_nav">
            <h6>Партнерам <img src="images/arrow_down123.svg" alt="" height="10px"></h6>
            <nav class="nav">
                <ul>
                    <li><a href="">Франчайзинг</a></li>
                    <li><a href="">Продавати в ITShop</a></li>
                    <li><a href="">Співпраця з нами</a></li>
                </ul>
            </nav>
            <div class="contacts_footer">
                <h6 class="second_line">Контакти <img src="images/arrow_down123.svg" alt="" height="10px"></h6>
                <ul>
                    <li><div class="circle"><img src="images/call 2.svg" alt="" height="16px"></div>+38(066)712-88-42</li>
                    <li><div class="circle"><img src="images/call 2.svg" alt="" height="16px"></div>+38(044)712-88-42</li>
                    <li><div class="circle"><img src="images/call 2.svg" alt="" height="16px"></div>+38(050)712-88-42</li>
                    <li><div class="circle"><img src="images/email.svg" alt="" height="16px"></div>itshop@gmail.com</li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/script.js"></script>
<script src="js/dropdown.js"></script>
</body>
</html>
