<!DOCTYPE html>

<html lang="lang={{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="content-style-type" content="text/css">

    <link href={{ asset('css/app.css') }} rel="stylesheet">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand mb-0 h1" href={{ route('index') }}>ООО "Стоматология"</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href={{ route('doctors') }}>Врачи</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ route('contacts') }}>Контакты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ route('services') }}>Услуги и цены</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href={{ asset('docs/license.pdf') }}>Лицензия</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
    <footer class="bg-info">
        <div class="d-flex justify-content-center">
            Информация и цены, представленные на сайте являются справочными и не являются публичной офертой.
        </div>
    </footer>
    <script src={{ asset('js/app.js') }}></script>

</body>

</html>
