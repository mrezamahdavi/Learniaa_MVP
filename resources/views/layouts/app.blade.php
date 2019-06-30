<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">

    <!-- MY emeb -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">



    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">



    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Farsi Font -->
    <style>
            @font-face
         { font-family: BYekan; 	src:url( {{ asset("/font/BYekan.woff") }}) }
            *{ font-family: BYekan;  font-size: 17px; }
        </style>



</head>
<body dir="rtl" >
    <div id="app"  >
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">

                <a class="navbar-brand" href="{{ url('/') }}">
                    <strong class="blue-text" style="color: rgb(33, 150, 243);font-weight:400">تورنادو</strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">ورود</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">ثبت نام</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        خروج
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <br>
        <main class="container">

            <div class="row">
            <div class="col-md-4">
                @if (auth::check())



                    <ul class="list-group">
                            <li class="bg-primary list-group-item text-white">منوی دسترسی</li>
                        <li class="list-group-item"><a href="{{ url('admin/home') }}">داشبورد</a></li>
                        <li class="list-group-item"><a href="{{ url('admin/user',Auth::user()->id) }}">پروفایل من</a></li>
                        <li class="list-group-item"><a href="{{ route('post.index') }}">پست ها</a></li>
                        <li class="list-group-item"><a href="{{ route('category.index') }}">دسته بندی ها</a></li>
                        <li class="list-group-item"><a href="{{ route('tag.index') }}">برچسب ها</a></li>
                        <li class="list-group-item"><a href="{{ url('admin/user')}}">کاربران</a></li>


                    </ul>
                    @endif

            </div>

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        @include('layouts.error')
                            @yield('content')
                    </div>

                </div>



            </div>
        </div>

        </main>
    </div>
</body>
</html>
