<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    {{--@dump(Request::route()->getName())--}}
    <header class="main-header">
        <nav class="navbar">
            <a href="{{route('static-page.home')}}" class="navbar-brand">Boolean</a>
            <ul>
            <li><a @if(Request::route()->getName() == 'static-page.home') class="active" @endif
                 href="{{route('static-page.home')}}">Home</a></li>
                <li><a href="#">Corso</a></li>
            <li><a href="{{route('student.index')}}">Dopo il corso</a></li>
                <li><a href="#">Lezione gratuita</a></li>
                <li><a href="#">Candidatura</a></li>
            </ul>
        </nav>
    </header>