<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Todos')</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <link href="/css/app.css" rel="stylesheet" type="text/css">

    <link href="/css/Animate.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
    <div class="content">
        @yield('content', '<div class="title">Laravel 5</div>')
    </div>
</div>

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
@show
</body>
</html>
