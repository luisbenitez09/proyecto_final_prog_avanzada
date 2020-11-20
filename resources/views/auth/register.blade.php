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
            <img src="img/img-login.png" alt="BlockBuster2" class="img-login">
        </div>
        <div class="col-lg-4 form-side">
            <form class="auth-form" method="POST" action="{{ route('register') }}">
                @csrf
                <img src="img/logo-ligth.svg" alt="BlockBuster2" id="form-logo">
                <h1>Welcome friends.</h1>
                <br>
                <div class="form-group">
                    <label for="exampleInputName1">Your name...</label>
                    <input type="text" class="form-control" id="name" name="name" :value="old('name')" required autofocus>
                </div>
                <div class="form-group">
                    <label for="exampleInputLastname1">Your lastname...</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" :value="old('lastname')" required autofocus>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Your email...</label>
                    <input type="email" class="form-control" id="email" name="email" :value="old('email')" required autofocus>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Your password...</label>
                    <input type="password" class="form-control" id="password" name="password" required autocomplete="new-password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirm your password...</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required autocomplete="new-password">
                </div>
                <div class="form-group">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                </div>
                <button type="submit" class="btn btn-blue btn-block">Register</button>
                <br>
            </form>
        </div>
    </div>
</body>
</html>
