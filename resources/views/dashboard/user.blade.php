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
            <div class="col-md-2 colmd-2">
            <div class="card bg-dark text-white">
                    <img class="card-img" src="https://images.squarespace-cdn.com/content/v1/5c549996c2ff615be28e2321/1549437429475-ARMJU14WF4AT3E1KN5X9/ke17ZwdGBToddI8pDm48kIBS5viOy0HP5EoJT3bHds97gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z5QPOohDIaIeljMHgDF5CVlOqpeNLcJ80NK65_fV7S1UeFSGbkY2-XgWhjRuERUQvFC6XUmZEvTwtms8Q3eFwmTwzgQ1HYBeOI75vUrs92jaw/YMH02.jpg?format=1500w" alt="Card image">
                    <div class="card-img-overlay img-overlay">
                        <h4>Toy Story</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-2 colmd-2">
            <div class="card bg-dark text-white">
                    <img class="card-img" src="https://i.pinimg.com/originals/13/74/b3/1374b3919f45780cca2b111bd377b85b.png" alt="Card image">
                    <div class="card-img-overlay img-overlay">
                        <h4>Toy Story</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-2 colmd-2">
            <div class="card bg-dark text-white">
                    <img class="card-img" src="https://images-na.ssl-images-amazon.com/images/I/81uAbShOxpL._AC_SL1500_.jpg" alt="Card image">
                    <div class="card-img-overlay img-overlay">
                        <h4>Toy Story</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-2 colmd-2">
            <div class="card bg-dark text-white">
                    <img class="card-img" src="https://images-na.ssl-images-amazon.com/images/I/71pCGJSF0lL._AC_SL1050_.jpg" alt="Card image">
                    <div class="card-img-overlay img-overlay">
                        <h4>Toy Story</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-2 colmd-2">
            <div class="card bg-dark text-white">
                    <img class="card-img" src="https://images-na.ssl-images-amazon.com/images/I/A1t8xCe9jwL._AC_SL1500_.jpg" alt="Card image">
                    <div class="card-img-overlay img-overlay">
                        <h4>Toy Story</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-2 colmd-2">
            <div class="card bg-dark text-white">
                    <img class="card-img" src="https://media1.popsugar-assets.com/files/thumbor/z5oKgNC9S4DS6Bay78Aoy5aLO4s/fit-in/728xorig/filters:format_auto-!!-:strip_icc-!!-/2017/01/26/813/n/1922283/055dc333c3280d59_BeautyAndTheBeast58726d5b9fac8/i/Beauty-Beast-2017-Movie-Posters.jpg" alt="Card image">
                    <div class="card-img-overlay img-overlay">
                        <h4>Toy Story</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 collg-6">
            <div class="card bg-dark text-white">
                    <img class="card-img" src="https://s03.s3c.es/imag/_v0/600x327/e/d/d/interestelar-coronavirus-secuela.jpg" alt="Card image">
                    <div class="card-img-overlay img-overlay">
                        <h4>Interstellar</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 collg-6">
            <div class="card bg-dark text-white">
                    <img class="card-img" src="https://api.time.com/wp-content/uploads/2014/12/american-sniper.jpg?quality=85&w=1024&h=512&crop=1" alt="Card image">
                    <div class="card-img-overlay img-overlay">
                        <h4>American snipper</h4>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <script src="js/main.js"></script>
</body>

</html>