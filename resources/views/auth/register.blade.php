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
        <div class="col-lg-5 form-side">
            <form class="auth-form-regsiter" method="POST" action="{{ route('register') }}">
                @csrf
                
                <h1>You are almost done</h1>
                <br>
                <div class="form-group">
                    <label for="exampleInputName1">First name</label>
                    <input type="text" class="form-control" id="name" name="name" :value="old('name')" required autofocus>
                </div>
                <div class="form-group">
                    <label for="exampleInputLastname1">Lastname</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" :value="old('lastname')" required autofocus>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Email</label>
                    <input type="email" class="form-control" id="email" name="email" :value="old('email')" required autofocus>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required autocomplete="new-password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirm your password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required autocomplete="new-password">
                </div>
                <button type="submit" class="btn btn-orange btn-block">Register</button>
                <br>
                <p>Already a member? <a class="blue-link" href="{{ route('login') }}">Sign In</a> </p>
            </form>
        </div>
    </div>
</body>
</html>
