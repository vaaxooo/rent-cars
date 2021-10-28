<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="Keywords" content="@yield('keywords')">
    <meta name="yandex-verification" content="589af4a29aa8428f" />

    <link href="{{ asset('/assets/landing/bootstrap/bootstrap.min.css') }}" rel="stylesheet" as="style" onload="this.rel='stylesheet'">
    @include('landing.components.partials.styles')
    @include('landing.components.partials.header_scripts')
</head>
<body>
<section id="main">

    @include('landing.components.header')

</section>

@yield('content')

@include('landing.components.partials.scripts')
</body>
</html>