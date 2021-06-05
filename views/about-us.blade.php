@extends('layouts.wrapper')

@section('link_css')
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
@endsection

@section('title')
    ITShop
@endsection

@section('content')
    <section class="about-us">
        <div class="row">
            <div class="img-wrap1 text-center col-12" style="margin-bottom: 30px">
                <img src="{{asset('images/image1.svg')}}" alt="">
            </div>

            <h2 class="col-6" style="font-weight: bold">&lt;ITShop/&gt; - твій<br>
                особистий помічник</h2>
            <p class="col-6" style="padding-left: 85px">
                Наша компанія - це особлива можливість<br>
                для Вас знайти програмне забезпечення<br>
                за найнижчою ціною. Для того, щоб<br>
                відповідати останнім тенденціям,<br>
                ми постійно поповнюємо наш<br>
                каталог товарів магазину.
            </p>

            <div class="img-wrap2 col-6">
                <img style="margin-bottom: 30px" src="{{asset('images/image2.svg')}}" alt="">
            </div>
            <div class="img-wrap3 col-6">
                <div>
                    <img src="{{asset('images/image1_1.svg')}}" alt="">
                    <img src="{{asset('images/image1_2.svg')}}" alt="">
                    <img src="{{asset('images/image1_3.svg')}}" alt="">
                </div>
                <div>
                    <img src="{{asset('images/image2_1.svg')}}" alt="">
                    <img src="{{asset('images/image2_2.svg')}}" alt="">
                    <img src="{{asset('images/image2_3.svg')}}" alt="">
                </div>
                <div>
                    <img src="{{asset('images/image3_1.svg')}}" alt="">
                    <img src="{{asset('images/image3_2.svg')}}" alt="">
                    <img src="{{asset('images/image3_3.svg')}}" alt="">
                </div>
                <div>
                    <img src="{{asset('images/image4_1.svg')}}" alt="">
                    <img src="{{asset('images/image4_2.svg')}}" alt="">
                    <img src="{{asset('images/image4_3.svg')}}" alt="">
                </div>
            </div>

            <div class="col-6">
                <h3 style="font-weight: bold; margin-top: 22px">
                    Історія нашої компанії
                </h3>
                <hr>
                <p style="padding-left: 80px">
                    Компанія &lt;ITShop/&gt; була створена в червні 2011 року.
                    Штат компанії налічує більше 40 співробітників, серед яких
                    майже половина - інженери і розробники програмних рішень.
                    Зараз серед наших партнерів-виробників програмних і програмно-апаратних
                    рішень - основні лідери IT-індустрії: Microsoft, McAfee, Fortinet, Tenable,
                    Atlassian, ESET, JetBrains, Autodesk і багато інших.
                </p>
            </div>
            <div class="col-6">
                <div class="img-wrap4 col-6">
                    <img style="margin: 30px 0" src="{{asset('images/image3.svg')}}" alt="">
                </div>
            </div>


            <div style="padding-left: 90px; margin-top: 20px" class="col-6">
                <img style="margin-bottom: 10px" class="img-wrap5" src="{{asset('images/image5.svg')}}" alt="">
                <img style="margin-bottom: 30px" class="img-wrap6" src="{{asset('images/image6.svg')}}" alt="">
            </div>
            <div class="col-5">
                <h3 style="font-weight: bold; padding-left: 85px; margin-top: 15px">
                    Нагороди
                </h3>
                <hr>
                <p style="padding-left: 80px">
                    У конкурсі брали участь кращі<br>
                    представники сфери ІТ, які<br>
                    подали заявки в рамках<br>
                    відкритого конкурсу на оцінку<br>
                    незалежного експертного журі.<br>
                    В результаті престижне звання<br>
                    дісталося &lt;ITShop/&gt;. На користь<br>
                    такого вибору зіграв<br>
                    безпрецедентний якісний<br>
                    стрибок у розвитку бізнесу<br>
                    «РАМАКС», що за два роки<br>
                    перетворився з нішевого<br>
                    інтегратора в багатопрофільний<br>
                    консорціум в області розробки і<br>
                    інтеграції найсучасніших<br>
                    інтелектуальних рішень для<br>
                    цифровізації бізнесу.
                </p>
            </div>


            <div class="img-wrap7 col-12 text-center">
                <img src="{{asset('images/image7.svg')}}" alt="">
            </div>
        </div>
    </section>
@endsection
