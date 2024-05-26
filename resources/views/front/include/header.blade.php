<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav ms-auto">
            <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
            @if(!auth()->check())
            <li><a href="{{ route('login') }}" class="nav-link">Login</a></li>
            @else
            <li><a href="{{ route('student-create') }}" class="nav-link">Add Student</a></li>
            <li><a href="{{ route('student-index') }}" class="nav-link">Manage Student</a></li>
            <li><a href="{{--{{ route('student-index') }}--}}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">Logout</a></li>
            <form action="{{ route('logout') }}" method="post" id="logoutForm">
                @csrf
            </form>
            @endif
        </ul>
    </div>
</nav>
