<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
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
                        <i class='bx bx-home nav__icon' ></i>
                            <span class="nav__name">Dashboard</span>
                        </a>

                        <a href="{{ route('users') }}" class="nav__link">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__name">Users</span>
                        </a>
                        
                        <a href="{{ route('categories') }}" class="nav__link">
                            <i class='bx bx-book-open nav__icon' ></i>
                            <span class="nav__name">Categories</span>
                        </a>

                        <a href="{{ route('movies') }}" class="nav__link">
                            <i class='bx bx-film nav__icon' ></i>
                            <span class="nav__name">Movies</span>
                        </a>

                        <a href="" class="nav__link">
                            <i class='bx bx-folder-plus nav__icon' ></i>
                            <span class="nav__name">Loans</span>
                        </a>
                    </div>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a onclick="event.preventDefault(); this.closest('form').submit();" class="nav__link">
                        <i class='bx bx-log-out nav__icon' ></i>
                        <span class="nav__name">Log Out</span>
                    </a>
                </form>
            </nav>
        </div>

        <div class="container dash-content">
            <div class="card counters">
                <div class="card-body">
                    <div class="row" style="text-align: center">
                        <div class="col">
                            <button type="button" class="btn counter dark btn-danger">
                                Categories <span class="badge badge-light">9</span>
                                <span class="sr-only">Categories</span>
                            </button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn counter btn-warning">
                                Movies <span class="badge badge-light">23</span>
                                <span class="sr-only">Movies</span>
                            </button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn counter btn-primary">
                                Users <span class="badge badge-light">40</span>
                                <span class="sr-only">Users</span>
                            </button>
                        </div>
                        <div class="col">
                            <button type="button" class="btn counter btn-success">
                                Loans <span class="badge badge-light">956</span>
                                <span class="sr-only">Loans</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
               <div class="row">
                    <div class="col-12 charts">
                        <canvas id="radarChart" ></canvas>
                    </div>
                    <div class="col-12 charts">
                        <canvas id="lineChart"></canvas>
                    </div>
                </div> 
            </div>
        </div>

        <script src="js/main.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
        <script src="js/radarChart.js"></script>
    </body>
</html>