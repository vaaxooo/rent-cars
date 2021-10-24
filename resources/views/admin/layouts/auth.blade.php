<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script async="" src="{{ asset('assets/admin-panel/js/app.js') }}"></script>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A project management Bootstrap theme by Medium Rare">
    <link href="https://pipeline.mediumra.re/assets/img/favicon.ico" rel="icon" type="image/x-icon">
    <link href="{{ asset('assets/admin-panel/images/icon') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin-panel/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin-panel/css/theme.css') }}" rel="stylesheet" type="text/css"
          media="all">
    <script type="text/javascript"
            src="{{ asset('assets/admin-panel/js/jquery.min.js') }}"></script>
    <script async="" src="{{ asset('assets/admin-panel/js/scripts.js') }}"></script>
</head>
<body class="auth-form">
    <div class="form-signin">
        @yield('content')
    </div>
</body>
</html>