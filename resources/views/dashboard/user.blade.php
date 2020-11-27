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
            <div class="row">
                <div class="col-sm">
                    <div class="card mb-3 cards_movie">
                        <img class="card-img-top cards_movie" src="img/bob_ok.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card mb-3 cards_movie">
                        <img class="card-img-top cards_movie" src="img/bob_ok.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card mb-3 cards_movie">
                        <img class="card-img-top cards_movie" src="img/bob_ok.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card mb-3 cards_movie">
                        <img class="card-img-top cards_movie" src="img/bob_ok.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row title_trending">
                <div class="col-sm">
                    <h4>Trending Movies</h4>
                </div>
            </div>

            <div class="row trending_movies">
                <div class="col">
                    <div class="card mb-3 card-m">
                        <img class="card-img-top"
                            src="https://images-na.ssl-images-amazon.com/images/I/A1t8xCe9jwL._AC_SY741_.jpg"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                        </div>
                    </div>
                </div>    
                <div class="col">    
                    <div class="card mb-3 card-m">
                        <img class="card-img-top"
                            src="https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/styles/480/public/media/image/2019/08/dama-vagabundo-2019-poster.jpg?itok=0uOGZduP"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3 card-m">
                        <img class="card-img-top"
                            src="https://cdn11.bigcommerce.com/s-ydriczk/images/stencil/1280x1280/products/89058/93685/Joker-2019-Final-Style-steps-Poster-buy-original-movie-posters-at-starstills__62518.1572351179.jpg?c=2?imbypass=on"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card mb-3 card-m">
                        <img class="card-img-top"
                            src="https://images-na.ssl-images-amazon.com/images/I/71niXI3lxlL._AC_SY679_.jpg"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                        </div>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="card mb-3 card-m">
                        <img class="card-img-top"
                            src="https://upload.wikimedia.org/wikipedia/en/d/d6/Beauty_and_the_Beast_2017_poster.jpg"
                            alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card card-m card-desc">
                        <img class="card-img-top"
                            src="https://i.blogs.es/45df5f/the-lion-king-taquilla-record-animacion/450_1000.jpg"
                            alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Tras el asesinato de su padre, Simba, un joven león es apartado su reino y
                                tendrá que descubrir con ayuda de amigos de la sabana
                                africana el significado de la responsabilidad y la valentía.</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row title_trending">
                <div class="col-sm">
                    <h4>Reviews</h4>
                </div>
            </div>

            <div class="row">
                <div class="col-sm">
                    <div class="card mb-3 card-mov" style="max-width: 540px">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://upload.wikimedia.org/wikipedia/en/d/d6/Beauty_and_the_Beast_2017_poster.jpg"
                                    alt="..." class="img-fluid img-c" />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Beauty and the beast </h5>
                                    <p class="card-text">
                                        This is a wider card with supporting text below as a natural lead-in to
                                        additional content. This content is a little bit longer.
                                    </p>
                                    <p class="card-text">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="card mb-3 card-mov" style="max-width: 540px">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://upload.wikimedia.org/wikipedia/en/d/d6/Beauty_and_the_Beast_2017_poster.jpg"
                                    alt="..." class="img-fluid img-c" />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Beauty and the beast </h5>
                                    <p class="card-text">
                                        This is a wider card with supporting text below as a natural lead-in to
                                        additional content. This content is a little bit longer.
                                    </p>
                                    <p class="card-text">
                                        <small class="text-muted">Last updated 3 mins ago</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    <script src="js/main.js"></script>
    </body>
</html>