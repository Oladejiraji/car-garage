<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->
        <!-- <script src="https://kit.fontawesome.com/ed3482c8e8.js" crossorigin="anonymous"></script> -->

        <!-- Style -->
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="../">
    </head>
    <body>
        <header>
            <div id="title">Cars</div>
            <div id="nav-bar">
                <div id="nav-center"></div>
            </div>
        </header>
        <div class="extend-nav">
                <ul>
                    <li><a href="/cars">Home</a></li>
                    <li><a href="/cars/garage">Garage</a></li>
                </ul>
            </div>

        @yield('content')

        <footer>
            Copyright 2020 Raji Oladeji
        </footer>
    </body>
</html>