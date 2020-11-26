<div>
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
                        <i class='bx bx-home nav__icon' ></i>
                            <span class="nav__name">Dashboard</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__name">Users</span>
                        </a>
                        
                        <a href="#" class="nav__link">
                            <i class='bx bx-book-open nav__icon' ></i>
                            <span class="nav__name">Categories</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class='bx bx-film nav__icon' ></i>
                            <span class="nav__name">Movies</span>
                        </a>

                        <a href="#" class="nav__link">
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
        
</div>
