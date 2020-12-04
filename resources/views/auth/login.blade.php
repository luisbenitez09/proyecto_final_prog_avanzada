<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <title>Sign In</title>
</head>
<body>
    <div class="row">
        <div class="col-6 poster">
            
        </div>
        <div class="col-lg-4 form-side">
            <form class="auth-form" method="POST" action="{{ route('login') }}">
                @csrf
                <img src="img/logo.svg" alt="BlockBuster2" id="form-logo">
                <h1>Welcome back.</h1>
                <br>
                <div class="form-group">
                    <label for="exampleInputEmail1">Your email...</label>
                    <input type="email" class="form-control" id="email" name="email" :value="old('email')" required autofocus>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Your password...</label>
                    <input type="password" class="form-control" id="password" name="password" required autocomplete="current-password">
                </div>
                <div class="form-group">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm orange-link" href="{{ route('password.request') }}">
                            Forgot your password?
                        </a>
                    @endif
                </div>
                <div class="form-group">
                    <label for="remember_me" class="flex items-center">
                        <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                        <span class="ml-2 text-sm text-gray-600">Remember me</span>
                    </label>
                </div>
                <button type="submit" class="btn btn-blue btn-block">Sign In</button>
                <br>
            <p>Still not a member? <a class="orange-link" href="{{ route('register') }}">Sign Up</a> </p>
            </form>
        </div>
    </div>
</body>
</html>