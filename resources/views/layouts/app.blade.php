<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token" />

    <!-- bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />

    <!-- fontawesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous" />

    <link rel="stylesheet" href="/css/app.css" />
    <link rel="icon" type="image/svg" href="/favicon.svg" />

    <title>@yield('title')</title>
</head>

<body>
    <!-- header -->
    <header class="main-header">
        <nav class="navbar fixed-top navbar-expand-md navbar-light bg-light">
            <a href="{{ route('home') }}" class="navbar-brand">
                <img src="/images/logo.svg" alt="redtest logo" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">На главную<span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ route('staff.index') }}>Наши сотрудники</a>
                    </li>
                    <li class="nav-item">
                        <!-- todo link -->
                        <a class="nav-link" href="pages/department/index.html">Список отделов</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- /header -->

    <div class="wrapper d-flex justify-content-center flex-wrap">
        <div class="container">
            <!-- main-contetn -->
            @yield('content')
            <!-- /main-content -->

            <!-- footer -->
            <footer class="footer row mt-3 align-self-end">
                <div class="col-12">
                    <p>Тестовое задание выполнил: <a id="author" href="https://jpee2k.github.io/" target="_blank">Serhii
                            Pylypenko</a></p>
                    <p><a href="mailto:jpee.dev@gmail.com" target="_blank">Обратная связь</a></p>
                    <p>2020</p>
                </div>
            </footer>
            <!-- /footer -->
        </div>
    </div>

    <!-- bootstrap CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
