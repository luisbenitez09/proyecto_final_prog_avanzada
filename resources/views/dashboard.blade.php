<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Styles -->

    @if (Auth::user()->hasRole('User'))
    <link rel="stylesheet" href="{{ asset('css/user.css') }}">
    @else
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    @endif
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Dashboard</title>
</head>
<body>

    @if (Auth::user()->hasRole('User'))
    <!-- if is user -->
    <x-dashboard-user/>

    @else
    <!-- else if is admin -->
    <x-dashboard-admin/>

    @endif

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
