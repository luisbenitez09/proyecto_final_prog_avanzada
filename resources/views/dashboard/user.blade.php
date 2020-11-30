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
            <div class="col-md-3">
            <div class="card bg-dark text-white">
                    <img class="card-img" src="https://static.t13.cl/images/original/2019/09/1568836077-dtcommonstreamsstreamserver.jpg" alt="Card image">
                    <div class="card-img-overlay img-overlay">
                        <h4>Toy Story</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
            <div class="card mov-cards">
                    <div class="row row_card">
                        <div class="col-sm-6">
                            <img src="https://spoiler.bolavip.com/__export/1582120387249/sites/bolavip/img/2020/02/19/peliculas_similares_a_parasite_que_ver_si_me_gusto_parasite_1_crop1582118764215.jpg_423682103.jpg" class="img-fluid i_movie">
                        </div>
                        <div class="col-sm-6">
                            <p class="cat_mov mt-2">Suspenso</p>
                            <h5 class="title_mov mt-2">Parasite</h5>
                            <p class="description_mov">Tanto Gi Taek como su familia están sin trabajo.
                                 Cuando su hijo mayor, Gi Woo, empieza..</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            <div class="card mov-cards">
                    <div class="row row_card">
                        <div class="col-sm-6">
                            <img src="https://spoiler.bolavip.com/__export/1582120387249/sites/bolavip/img/2020/02/19/peliculas_similares_a_parasite_que_ver_si_me_gusto_parasite_1_crop1582118764215.jpg_423682103.jpg" class="img-fluid i_movie">
                        </div>
                        <div class="col-sm-6">
                            <p class="cat_mov mt-2">Suspenso</p>
                            <h5 class="title_mov mt-2">Parasite</h5>
                            <p class="description_mov">Tanto Gi Taek como su familia están sin trabajo.
                                 Cuando su hijo mayor, Gi Woo, empieza..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 cl-6">
            <div class="card bg-dark text-white">
                    <img class="card-img" src="https://s03.s3c.es/imag/_v0/600x327/e/d/d/interestelar-coronavirus-secuela.jpg" alt="Card image">
                    <div class="card-img-overlay img-overlay">
                        <h4>Interstellar</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
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