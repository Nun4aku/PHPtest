<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-block')</title>
    <link rel="stylesheet" href="/css/app2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="/../../../js/rainbow-custom.min.js"></script>
    <link href = "/../../../css/theme.css" rel = "stylesheet" type = "text/css">
</head>
<body>

    @include('inc.header')

    <div class="container">
        <form method="get" action="{{ route('search') }}">
            <div class="input-group">
                <input id="search" name="search"
                        type="search" class="form-control rounded" placeholder="Поиск по названию пасты" aria-label="Search"
                       aria-describedby="search-addon" />
                <button type="submit" class="btn btn-success">Искать</button>
            </div>
        </form>

        @include('inc.messages')

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 p-lg-4 p-md-3 p-sm-3 p-xs-2">
                @yield('content')
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 p-lg-4 p-md-3 p-sm-3 p-xs-2">
                @include('inc.aside')
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p-lg-4 p-md-3 p-sm-3 p-xs-2">
                @yield('content2')
            </div>
        </div>
    </div>



    @include('inc.footer')
</body>
</html>
