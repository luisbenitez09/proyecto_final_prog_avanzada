<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <title>BlockBuster 2</title>
</head>
<body id="main-screen" class="antialiased">
    <nav class="navbar navbar ">
        <img src="img/logo-ligth.svg" alt="BlockBuster2" id="nav-logo">
    </nav>
    <div class="row">
        <div class="col main-title">
            <h1 class="title">Do you like Netflix? <strong>You'll love this.</strong></h1>
            <p class="main-description">We have all time best movies and the recent ones, 4k and available in all your devices. <br/>
            Do you really need something else?</p>
            @if (Route::has('login'))
                <div class="main-btn">
                    @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="button" class="btn btn-outline-primary btn-lg btn-izq" onclick="location.href='{{ url('/dashboard') }}'">Dashboard</button>
                            <button type="button" class="btn btn-outline-danger btn-lg" onclick="event.preventDefault();
                                                                                        this.closest('form').submit();">Sign Out</button>
                        </form>
                        
                    @else
                        <button type="button" class="btn btn-outline-primary btn-lg btn-izq" onclick="location.href='{{ url('login') }}'">Sign In</button>
                        @if (Route::has('register'))
                            <button type="button" class="btn btn-outline-warning btn-lg" onclick="location.href='{{ url('register') }}'">Sing Up</button>
                        @endif
                    @endif 
                </div>
            @endif
            
            
        </div>
    </div>
</body>
</html>