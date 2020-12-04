<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <title>Dashboard</title>
</head>

<body id="body-pd">

    <header class="header" id="header">
        <div class="header__toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>

        <div class="header__img">
            <img src="img/logo.svg" alt="">
        </div>
    </header>

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav__logo">
                    <i class='bx bx-bold nav__logo-icon'></i>
                    <span class="nav__logo-name">BB Infinity</span>
                </a>

                <div class="nav__list">
                    <a href="{{ route('dashboard') }}" class="nav__link active">
                        <i class='bx bx-home nav__icon'></i>
                        <span class="nav__name">Dashboard</span>
                    </a>

                    <a href="{{ route('movies') }}" class="nav__link">
                        <i class='bx bx-film nav__icon'></i>
                        <span class="nav__name">New movies</span>
                    </a>

                    <a href="{{ route('loans') }}" class="nav__link">
                        <i class='bx bx-folder-plus nav__icon'></i>
                        <span class="nav__name">My movies</span>
                    </a>
                </div>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a onclick="event.preventDefault(); this.closest('form').submit();" class="nav__link">
                    <i class='bx bx-log-out nav__icon'></i>
                    <span class="nav__name">Log Out</span>
                </a>
            </form>
        </nav>
    </div>

    <div class="container cards">
        <div class="row banner_card">
            <div class="col-lg-12">
                <div class="card bg-dark text-white">
                    <img class="card-img img_cards" src="https://mamuky.com/wp-content/uploads/2020/04/Screenshot_2020-04-11-Ver-La-Dama-y-el-Vagabundo-2019-Disney.png" alt="Card image">
                    <div class="card-img-overlay">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
        @if(isset($movies) && count($movies)>0)
                @foreach($movies as $movie)
            <div class="col-md-2 colmd-2">
            <div class="card bg-dark text-white">
            <img class="card-img" src="img/{{ $movie->cover }}" alt="Card image">
                    <div class="card-img-overlay img-overlay">
                        <h4>{{ $movie->title }}</h4>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>

        <div class="row">
        @if(isset($movies2) && count($movies2)>0)
                @foreach($movies2 as $movie)
            <div class="col-lg-6 collg-6">
            <div class="card bg-dark text-white">
                    <img class="card-img" src="https://s03.s3c.es/imag/_v0/600x327/e/d/d/interestelar-coronavirus-secuela.jpg" alt="Card image">
                    <div class="card-img-overlay img-overlay">
                        <h4>{{ $movie->title }}</h4>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>

    <script src="js/main.js"></script>
</body>

</html>