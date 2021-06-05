@extends('layouts.wrapper')

@section('link_css')
    <link rel="stylesheet" href="css/cart.css">
@endsection

@section('title')
    ITShop
@endsection

@section('content')
    <div class="grid">
        <div class="grid__headers">
            <ul>
                <li><a href="">Продукт</a></li>
                <li><a href="">Ціна</a></li>
                <li><a href="">Кількість</a></li>
                <li><a href="">Кінцева ціна</a></li>
            </ul>
        </div>
        @foreach($order->products as $product)
            <div class="product">
                <form action="{{ route('basket-remove-all', $product) }}" method="post">
                    @csrf
                    <button class="product_remove" href="{{ route('basket-remove-all', $product) }}" type="submit"><img src="images/cancel.svg" alt="" height="40px" width="40px"></button>
                </form>
                <div class="product__image"><img src="{{asset($product->imageName)}}" alt=""></div>
                <div class="parameters_wrapper">
                    <div class="parameters_name">{{ $product->name }}</div>
                    <div class="parameters_price">{{ $product->price }} ₴</div>
                    <div class="parameters_quantity">
                        <form action="{{ route('basket-remove', $product) }}" method="post">
                            @csrf
                            <button class="minus" href="{{ route('basket-remove', $product) }}" type="submit">-</button>
                        </form>
                        <div class="quantity_count">{{ $product->pivot->count }}</div>
                        <form action="{{ route('basket-add', $product) }}" method="post">
                            @csrf
                            <button class="plus" href="{{ route('basket-add', $product) }}" type="submit">+</button>
                        </form>
                    </div>
                    <div class="parameters_total">{{ $product->getPriceForCount() }} ₴</div>
                </div>
            </div>
        @endforeach
        <div class="total">
            <div class="total__price">Загальна ціна</div>
            <div class="price_wrapper">
                <div class="gap"></div>
                <div class="gap"></div>
                <div class="gap"></div>
                <div class="total_result">{{ $order->getFullPrice() }} ₴</div>
            </div>
        </div>
        <form action="{{ route('basket-confirm') }}" method="post">
            @csrf
            <div class="accept_wrapper">
                <div class="gap"></div>
                <div class="gap"></div>
                <div class="gap"></div>
                <input type="text" name="nickname" value="{{ Auth::check() == 1 ? auth()->user()->nickname : ''}}">
                <input type="text" name="email" value="{{ Auth::check() == 1 ? auth()->user()->email : ''}}">
                <a class="accept"><button type="submit">Оформити замовлення</button></a>
            </div>
        </form>
    </div>
@endsection
