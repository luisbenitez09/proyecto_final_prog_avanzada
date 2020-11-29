<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <title>Movies</title>
</head>

<body id="body-pd" class="body_movies">

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
                    <a href="#" class="nav__link active">
                        <i class='bx bx-home nav__icon'></i>
                        <span class="nav__name">Dashboard</span>
                    </a>

                    <a href="#" class="nav__link">
                        <i class='bx bx-user nav__icon'></i>
                        <span class="nav__name">Profile</span>
                    </a>

                    <a href="#" class="nav__link">
                        <i class='bx bx-film nav__icon'></i>
                        <span class="nav__name">Movies</span>
                    </a>

                    <a href="#" class="nav__link">
                        <i class='bx bx-folder-plus nav__icon'></i>
                        <span class="nav__name">Loans</span>
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

    <div class="container c_movies">
        <div class="row">

            <div class="col-md-5">
                <div class="description_movies">
                <h1><strong>You'll love this.</strong></h1>
                <p class="main-description">We have all time best movies and the recent ones, 4k and available in all your devices. <br/>
                Do you really need something else?</p>
                </div>
            </div>
            <div class="col-md-7 info_movie">
                
            @if(isset($movies) && count($movies)>0)
            @foreach($movies as $movie)
            <div class="card mt-4 card_mv">
                <div class="row">
                    <div class="col-md-4">
                        <img src="img/{{$movie->cover}}" class="img-fluid i_mov">
                    </div>
                    <div class="col-md-8">
                        <h5 class="title_movie mt-2">{{ $movie->title }}</h5>
                        <p class="classification_movie inf_m">{{ $movie->classification }}</p>
                        <p class="minutes_movie inf_m">{{ $movie->minutes }} min</p>
                        <p class="year_movie inf_m">{{ $movie->year }}</p>
                        <p class="category_movie inf_m">{{ $movie->category->name }}</p>
                        <p class="description_movie">{{ $movie->description }}</p>
                        <button class="btn btn-success btn_movie">Rentar</button>
                 </div>
            </div>
            </div>
            @endforeach
            @endif
        </div>
        <div class="container_movies">.</div>
    </div>
    </div>

    <script src="js/main.js"></script>
</body>

</html>