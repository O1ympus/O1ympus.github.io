@extends('layouts.wrapper')

@section('link_css')
    <link rel="stylesheet" href="css/index.css">
@endsection

@section('title')
    ITShop
@endsection

@section('content')
<div class="slider">
    <div class="item">
        <div class="slider_info">
            <h1>Adobe - Photoshop</h1>
            <p>Створюй. Вір. Photoshop.<br>
                Отримайте Photoshop на робочому столі та iPad<br>
                всього за 20,99 доларів США на місяць.</p>
            <div class="button">Купити зараз</div>
        </div>
        <div class="slider_image"><img src="images/unnamed.png" alt=""></div>
    </div>
    <div class="item">
        <div class="slider_info">
            <h1>Intellij IDEA - JetBrains</h1>
            <p>Тільки сьогодні продукти компанії<br> JetBrains зі знижкою в 20%.<br>Встигни придбати такі IDE, як
                Intellij<br> IDEA, WebStorm, PhpStorm, Pycharm</p>
            <div class="button"><a href="">Купити зараз</a></div>
        </div>
        <div class="slider_image"><img src="images/p1_2638189_ec62c47b.png" alt=""></div>
    </div>
    <div class="item">
        <div class="slider_info">
            <h1>Microsoft Office 365</h1>
            <p>Розроблений, щоб допомогти досягти більшого<br> завдяки інноваційним програмам Office,<br>інтелектуальним хмарним сервісам та безпеці світового класу</p>
            <div class="button">Купити зараз</div>
        </div>
        <div class="slider_image"><img src="images/Office-365 (1).png" alt=""></div>
    </div>

    <a class="prev" onclick="minusSlide()">&#10094;</a>
    <a class="next" onclick="plusSlide()">&#10095;</a>

    <div class="slider-dots">
        <span class="slider-dots_item" onclick="currentSlide(1)"></span>
        <span class="slider-dots_item" onclick="currentSlide(2)"></span>
        <span class="slider-dots_item" onclick="currentSlide(3)"></span>
    </div>
</div>
<div class="wrapper">
    <div class="purchase_options">
{{--        <div class="sort">--}}
{{--            <ul>--}}
{{--                <li>Сортувати по</li>--}}
{{--                <li>Найпопулярніші <img src="images/arrow_down.svg" alt="" height="10px"></li>--}}
{{--            </ul>--}}
{{--        </div>--}}
        <div class="keywords_price">
            <form class="first_form" method="get" action="{{route('search')}}">
                <ul>
                    <li>Ключові слова</li>
                    <li><input type="text" name="searchText" placeholder="Антивірус"></li>
                    <li><button type="submit"></button></li>
                </ul>
            </form>
            <form method="get" action="{{route('PriceFilter')}}">
                <ul>
                    <li>Ціна</li>
    {{--                <li><input class="price_input" placeholder="мін."></li>--}}
    {{--                <li><input class="price_input" placeholder="макс."></li>--}}
                        <li><input type="text" class="price_input" name="price_from" placeholder="мін."></li>
                        <li><input type="text" class="price_input" name="price_to" placeholder="макс."></li>
                        <button type="submit"></button>
                </ul>
            </form>
        </div>
{{--        <div class="currency">--}}
{{--            <ul>--}}
{{--                <li>Ціна в:</li>--}}
{{--                <li>USA <img src="images/arrow_down.svg" alt="" height="10px"></li>--}}
{{--            </ul>--}}
{{--        </div>--}}
    </div>
    <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn" id="button_remove"><img src="images/Group 37.svg" alt="">Каталог товарів</button>
        <div id="myDropdown" class="dropdown-content">
            <a href="#antivirus">Антивіруси</a>
            <a href="#multimedia">Мультимедіа</a>
            <a href="#graphic">Графіка і дизайн</a>
            <a href="#office">Офісні програми</a>
        </div>
    </div>
    <div class="topics_grid">
        <nav class="topics" id="menu">
            <ul>
                <li><a href="#antivirus">Антивіруси <img src="images/arrow_right.svg" alt="" height="14px"></a></li>
                <li><a href="#multimedia">Мультимедіа <img src="images/arrow_right.svg" alt="" height="14px"></a></li>
                <li><a href="#graphic">Графіка і дизайн <img src="images/arrow_right.svg" alt="" height="14px"></a></li>
                <li><a href="#office">Офісні програми <img src="images/arrow_right.svg" alt="" height="14px"></a></li>
                <li><a href="">Операційні системи <img src="images/arrow_right.svg" alt="" height="14px"></a></li>
                <li><a href="">Інформаційна безпека <img src="images/arrow_right.svg" alt="" height="14px"></a></li>
                <li><a href="">Антивіруси <img src="images/arrow_right.svg" alt="" height="14px"></a></li>
                <li><a href="">Програми для 3D <img src="images/arrow_right.svg" alt="" height="14px"></a></li>
                <li><a href="">Програми для конференцій <img src="images/arrow_right.svg" alt="" height="14px"></a></li>
                <li><a href="">Безпека мережі компанії <img src="images/arrow_right.svg" alt="" height="14px"></a></li>
                <li><a href="">Плагіни <img src="images/arrow_right.svg" alt="" height="14px"></a></li>
                <li><a href="">Розваги <img src="images/arrow_right.svg" alt="" height="14px"></a></li>
                <li><a href="">Засоби тестування програм <img src="images/arrow_right.svg" alt="" height="14px"></a></li>
                <li><a href="">Управління процесами <img src="images/arrow_right.svg" alt="" height="14px"></a></li>
                <li><a href="">Облік і автоматизація <img src="images/arrow_right.svg" alt="" height="14px"></a></li>
                <li><a href="">Утиліти <img src="images/arrow_right.svg" alt="" height="14px"></a></li>
            </ul>
        </nav>
        <div class="grid">
            @foreach($products as $product)
                <div class="el">
                    <div class="heart">
                        <form action="{{route('basket-add', $product)}}" method="post">
                            @csrf
                            <button type="submit"><img src="{{asset('images/like 1.svg')}}" alt=""></button>
                        </form>
                    </div>
                    <div class="goods_image"><img src="{{asset($product->imageName)}}" alt=""></div>
                    <h6>{{$product->name}}</h6>
                    <div class="info_bottom">
                        <p>{{$product->oldPrice}} ₴</p>
                        <p class="semibold_price">{{$product->price}} ₴</p>
                    </div>
                </div>
            @endforeach
                {{$products->appends(['searchText' => request()->searchText])->links("custom-pagination")}}
        </div>
    </div>
    <div class="antivirus">
        <h1><a id="antivirus">Антивіруси</a></h1>
        <div class="antivirus__grid">
        <?php
            use App\Models\Product;
            $products = Product::all();
        ?>
        @foreach($products as $product)
            @if($product->id > 5)
                @continue
            @endif
            <div class="el">
                <div class="heart">
                    <form action="{{route('basket-add', $product)}}" method="post">
                        @csrf
                        <button type="submit"><img src="{{asset('images/like 1.svg')}}" alt="" height="40px"></button>
                    </form>
                </div>
                <div class="goods_image"><img src="{{asset($product->imageName)}}" alt="" height="140px" width="140px"></div>
                <h6>{{$product->name}}</h6>
                <div class="info_bottom">
                    <p>{{$product->oldPrice}} ₴</p>
                    <p class="semibold_price">{{$product->price}} ₴</p>
                </div>
            </div>
        @endforeach
        </div>
    </div>
    <div class="multimedia">
        <h1><a id="multimedia">Мультимедіа</a></h1>
        <div class="multimedia__grid">
            @foreach($products as $product)
                @if($product->id < 6 or $product->id > 10)
                    @continue
                @endif
                <div class="el">
                    <div class="heart">
                        <form action="{{route('basket-add', $product)}}" method="post">
                            @csrf
                            <button type="submit"><img src="{{asset('images/like 1.svg')}}" alt="" height="40px"></button>
                        </form>
                    </div>
                    <div class="goods_image"><img src="{{asset($product->imageName)}}" alt="" height="140px" width="140px"></div>
                    <h6>{{$product->name}}</h6>
                    <div class="info_bottom">
                        <p>{{$product->oldPrice}} ₴</p>
                        <p class="semibold_price">{{$product->price}} ₴</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="graphic_design">
        <h1><a id="graphic">Графіка і дизайн</a></h1>
        <div class="graphic_design__grid">
            @foreach($products as $product)
                @if($product->id < 11 or $product->id > 15)
                    @continue
                @endif
                <div class="el">
                    <div class="heart">
                        <form action="{{route('basket-add', $product)}}" method="post">
                            @csrf
                            <button type="submit"><img src="{{asset('images/like 1.svg')}}" alt="" height="40px"></button>
                        </form>
                    </div>
                    <div class="goods_image"><img src="{{asset($product->imageName)}}" alt="" height="140px" width="140px"></div>
                    <h6>{{$product->name}}</h6>
                    <div class="info_bottom">
                        <p>{{$product->oldPrice}} ₴</p>
                        <p class="semibold_price">{{$product->price}} ₴</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="office_programs">
        <h1><a id="office">Офісні програми</a></h1>
        <div class="office_programs__grid">
            @foreach($products as $product)
                @if($product->id < 16)
                    @continue
                @endif
                <div class="el">
                    <div class="heart">
                        <form action="{{route('basket-add', $product)}}" method="post">
                            @csrf
                            <button type="submit"><img src="{{asset('images/like 1.svg')}}" alt="" height="40px"></button>
                        </form>
                    </div>
                    <div class="goods_image"><img src="{{asset($product->imageName)}}" alt="" height="140px" width="140px"></div>
                    <h6>{{$product->name}}</h6>
                    <div class="info_bottom">
                        <p>{{$product->oldPrice}} ₴</p>
                        <p class="semibold_price">{{$product->price}} ₴</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<script src="js/slider.js"></script>
<script src="js/list.js"></script>
<script src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#myDropdown").on("click","a", function (event) {
            event.preventDefault();
            var id  = $(this).attr('href'),
                top = $(id).offset().top;
            $('body,html').animate({scrollTop: top}, 1500);
        });
        $("#menu").on("click","a", function (event) {
            event.preventDefault();
            var id  = $(this).attr('href'),
                top = $(id).offset().top;
            $('body,html').animate({scrollTop: top}, 1500);
        });
    });
    $('.dropbtn').on('click', function(){
        $(this).toggleClass('dropbtn_active');
    })
</script>
@endsection
