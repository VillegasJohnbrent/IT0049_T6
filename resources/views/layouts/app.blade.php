<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Home') | Laravel POS</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header><div class="nav-wrap"><a class="brand" href="{{ route('home') }}">Laravel POS</a>
<nav aria-label="Main navigation">
    <a href="{{ route('home') }}" @if(request()->routeIs('home')) aria-current="page" @endif>Home</a>
    <a href="{{ route('about') }}" @if(request()->routeIs('about')) aria-current="page" @endif>About</a>
    <a href="{{ route('customers.index') }}" @if(request()->routeIs('customers.*')) aria-current="page" @endif>Customers</a>
    <a href="{{ route('users.index') }}" @if(request()->routeIs('users.*')) aria-current="page" @endif>Users</a>
</nav></div></header>
<main>@yield('content')</main>
<footer>IT0049 · TFA6 · John Brent D. Villegas · TX33</footer>
</body>
</html>
