<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="estilos.css" />

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity))
            }
        }

    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>
@extends('layouts.app')

@section('content')
<body style=" background-color: rgb(0, 5, 5); padding: 10px;">
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand" href="#">Barra de Navegación</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#inicio">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tabla">Lista de Peliculas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#somos">Quienes Somos</a>
                </li>
            </ul>
        </div>
        <div id="inicio">
        </div>
    </nav>
    <div id="inicio" style="width: 100%;   align-items: center; align-self: center;" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.laguiadelvaron.com/wp-content/uploads/2021/08/imagenes-filtradas-spider-man-no-way-home-www.laguiadelvaron-2.jpg" alt="Los Angeles" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="https://www.wisum.mx/blog/wp-content/uploads/2019/04/avengers-endgame.jpg" alt="Chicago" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="https://3.bp.blogspot.com/-uHLryub4aYY/UPrdanzwxHI/AAAAAAAAAHw/K1WTAsRyIfE/s1600/que-pelicula-de-la-saga-terminator-os-gusta-mas-original.jpg" alt="New York" width="1100" height="500">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    <div class="container" id="tabla">
        <h2 style="color: aliceblue;">PELÍCULAS DE ESTRENO</h2>
        <p style="color: aliceblue;">
            Ponemos a la disposición del usuario la lista de películas de estreno.
        </p>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Descripción</th>
                    <th>Imagen</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>X-MEN</td>
                    <td>Evolución de la humanidad que se conoce como mutantes.</td>
                    <td><img class="img" width="100" height="60" src="https://th.bing.com/th/id/R.3356abd4bd49d028c0644defbb099711?rik=GX7NXq%2fwoJmwjA&pid=ImgRaw&r=0" /></td>
                </tr>
                <tr>
                    <td>GLADIADOR</td>
                    <td>Se remonta a la epoca de la expanción del imperio romano.</td>
                    <td><img class="img" width="100" height="60" src="https://1.bp.blogspot.com/-2OyOXmrTe0s/XVs3etE9jeI/AAAAAAAAFCM/0morv-8dMuM41RDgU-ZGGxOKhw31clCbwCK4BGAYYCw/s1600/AAAABYFKoyOf9ukGn6ufWtnPED1erK2SZqQEYHbdXjmEpp4QJrXKQzT4KWdSN51NQs4A4Ntvo5D3bE7SV5pzVGRL0drY4OraB_Hs5w.jpg" alt="Elephant at sunset" /></td>
                </tr>
                <tr>
                    <td>Avengers end Game</td>
                    <td>Pelicula de ciencia ficción multiverso, ultima batalla de los vengadores.</td>
                    <td><img class="img" width="100" height="60" src="https://cdn.atomix.vg/wp-content/uploads/2018/04/la-mejor-pelicula-avengers-infinity-war-poster1.jpg" alt="Elephant at sunset" /></td>
                </tr>
                <tr>
                    <td>Lucifer</td>
                    <td>El diablo cansado de estar en el infierno decide salir al mundo de los mortales, específicamente a los ángeles en donde vive una historia amorosa.</td>
                    <td><img class="img" width="100" height="60" src="https://th.bing.com/th/id/R.c4e003f173d9f011961ee16e59817b20?rik=L7xm36m9ZdWuAQ&riu=http%3a%2f%2fseriepolis.com%2fwp-content%2fuploads%2f2018%2f06%2flucifer.jpg&ehk=kfPMAFxGZ47hHy%2f%2bNWaM1sm00dqQvLL3GTqONnIEyBo%3d&risl=&pid=ImgRaw&r=0" alt="Elephant at sunset" /></td>
                </tr>
                <tr>
                    <td>Venom</td>
                    <td>Mediante una expedición fallida cae la nave de los astronautas trayendo con ellos extraterrestres que tienen por objetivo conquistar el planeta.</td>
                    <td><img class="img" width="100" height="60" src="https://th.bing.com/th/id/R.251d4bc7bfad2b12dc59f2ece26cd535?rik=78zduHh0q4DOIA&pid=ImgRaw&r=0" alt="Elephant at sunset" /></td>
                </tr>
                <tr>
                    <td>After</td>
                    <td>Historia de una pareja de jóvenes.</td>
                    <td><img class="img" width="100" height="60" src="https://th.bing.com/th/id/R.e20cc257a633d792f7f24d6037ef4cb4?rik=NwxlQIWlI5%2fVlw&pid=ImgRaw&r=0" alt="Elephant at sunset" /></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="somos" style="text-align: center;">
        <h1 style="color: aliceblue;">Sobre Nosotros </h1>
        <p style="color: aliceblue;"> Somos un sitio web en el cual encontrarás las mejores películas de estreno, contamos con la<br>
            lista actualizada de estrenos más populares de la actualidad. <br>
            Te invitamos a compartir este genial sitio web con tus amigos y familiares<br>

        </p>
    </div>
    <a href='peliculas.show' class="btn btn-primary mr-2 text-white">Ver Peliculas</a>
    <footer style=" background-color: rgb(0, 5, 5); padding: 10px;">
        <h4 style="color: aliceblue;">
            Todo el contenido © Copyright 2022 Flutter Corporation
        </h4>
    </footer>
</body>
@endsection
</html>
