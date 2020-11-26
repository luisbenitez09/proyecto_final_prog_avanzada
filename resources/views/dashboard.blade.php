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
    

    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Dashboard</title>
</head>
<body id="body-pd">

    @if (Auth::user()->hasRole('User'))
    <!-- if is user -->
    <x-dashboard-user/>

    @else
    <!-- else if is admin -->
    <x-dashboard-admin/>

    @endif


<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
