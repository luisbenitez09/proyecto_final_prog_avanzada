<!DOCTYPE html>
  <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <!-- Styles -->
      <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
          integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

      <title>Loan</title>
  </head>

<body id="body-pd">
    
    <header class="header" id="header">
        <div class="header__toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>
        <div class="header__img">
            <img src="img/logo.svg" alt="" />
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
                    <a href="{{ route('dashboard') }}" class="nav__link">
                        <i class='bx bx-home nav__icon'></i>
                        <span class="nav__name">Dashboard</span>
                    </a>

                    <a href="{{ route('users') }}" class="nav__link">
                        <i class='bx bx-user nav__icon'></i>
                        <span class="nav__name">Users</span>
                    </a>

                    <a href="{{ route('categories') }}" class="nav__link">
                        <i class='bx bx-book-open nav__icon'></i>
                        <span class="nav__name">Categories</span>
                    </a>

                    <a href="{{ route('movies') }}" class="nav__link active">
                        <i class='bx bx-film nav__icon'></i>
                        <span class="nav__name">Movies</span>
                    </a>

                    <a href="{{ route('loans') }}" class="nav__link">
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

    <div class="container dash-content">
        <div class="row"><h1>{{ $loan->movie->title }}</h1></div>
        <div class="row second-row">
            <div class="col-md-4">
                <form action="">
                    <label >Classification</label>
                    <input class="form-control" type="text" value="{{ $loan->movie->classification }}" readonly>
                    <br>
                    <label >Year</label>
                    <input class="form-control" type="text" value="{{ $loan->movie->year }}" readonly>
                    <br>
                    <label >Minutes</label>
                    <input class="form-control" type="text" value="{{ $loan->movie->minutes }}" readonly>
                </form>
            </div>
            <div class="col-md-4 ">
                <label>Trailer</label>
                <input class="form-control" type="text" value="{{ $loan->movie->trailer }}" readonly>
                <br>
                <label >Category</label>
                <input class="form-control" type="text" value="{{ $loan->movie->category->name }}" readonly>
                <br>
                <label>Description</label>
                <textarea readonly class="form-control" cols="32" rows="2">{{ $loan->movie->description }}</textarea>
            </div>
            <div class="col-md-4">
                <img src="img/{{ $loan->movie->cover }}" class="cover"/>
            </div>
        </div>

        <div class="row second-row"><h1>Loan info</h1></div>
        <div class="row second-row">
            <div class="col-md-4">
                <form action="">
                    <label >First name</label>
                    <input class="form-control" type="text" value="{{ $loan->user->name }}" readonly>
                    <br>
                    <label >Last name</label>
                    <input class="form-control" type="text" value="{{ $loan->user->lastname }}" readonly>
                </form>
            </div>
            <div class="col-md-4 ">
                <label>Email</label>
                <input class="form-control" type="text" value="{{ $loan->user->email }}" readonly>
                <br>
                <label >Loan Status</label>
                <input class="form-control" type="text" value="{{ $loan->status }}" readonly>
            </div>
            <div class="col-md-4 ">
                <label>Loan date</label>
                <input class="form-control" type="text" value="{{ $loan->loan_date }}" readonly>
                <br>
                <label >Return date</label>
                @if ($loan->status == "Borrowed")
                    <input class="form-control" type="text" value="Pending..." readonly>
                @else
                    <input class="form-control" type="text" value="{{ $loan->status }}" readonly>
                @endif
            </div>
        </div>

    </div>

    

    
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>

</html>