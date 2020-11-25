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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
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

</body>
</html>
