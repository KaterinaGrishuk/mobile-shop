<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Mobile Shop')</title>
    @section('css')
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <link rel="stylesheet" type="text/css" href="/css/main.css">
        <link rel="stylesheet" type="text/css" href="/libs/font-awesome/css/font-awesome.min.css">
    @show
</head>
<header>
    <div class="container">
        <a href="{{route('index-home')}}"><h1 class="sitename">Mobile Shop</h1></a>

        @if(Auth::guest())
            <div class="auth1"><a href="{{route('login')}}">Войти</a></div>
            <div class="auth2"><a href="{{route('register')}}">Регистрация</a></div>
        @else
        <div class="user_menu" style="margin-right: 200px">
        <ul>
            <li><a href="{{route('index-home')}}">Каталог телефонов</a></li>
            <li><i class="fa fa-arrow-up" aria-hidden="true"></i></li>
        </ul>
        </div>
            <div class="user_menu">
                <ul>
                    <li><a href="{{route('add-product')}}">Добавить новый товар</a></li>
                    <li><a href="{{route('user-product-list',['id'=>Auth::user()->id])}}">Мои товары</a></li>
                </ul>
                <ul>
                    <li><a href="{{route('user-sale-products',['id'=>Auth::user()->id])}}">Проданные товары</a></li>
                    <li><a href="{{route('user-buy-products',['id'=>Auth::user()->id])}}">Купленные товары</a></li>
                </ul>
            </div>
            <div class="auth">

                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <i class="fa fa-user-o" aria-hidden="true"></i> {{ Auth::user()->user_name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu" role="menu">
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();"> Выйти
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
            </div>
        @endif
    </div>
</header>
<body>
<div class="wrapper">
<div class="container">

    @if(isset($title))
        <h1 class="title1">{{$title}}</h1>
    @endif
    @if(session('status'))
        <div class="alert alert-success" style="margin-top: 15px;">{{ session('status') }}</div>
    @endif
    @if(session('access'))
        <div class="alert alert-danger" style="margin-top: 15px;">{{ session('access') }}</div>
    @endif
</div>

@yield('content')

</div>
<footer>
    <hr>
    <div class="container">
        <p>&copy;<?php echo date('Y')?> Mobile Shop</p>
    </div>
</footer>

@section('footer.js')
    <script src='/js/app.js'></script>
    <script src='/js/product-load.js'></script>
@show

</body>
</html>