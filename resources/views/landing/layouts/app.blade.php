<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <meta name="description" content="Аренда Mercedes Киев и обл ✅ Все классы Мерседес V,G,E, S-class ✅ Прокат с водителем и без ✅ Подача авто 100% ✅ VIP сервис 24/7 ✅ Англоговорящие водители ⭐Выгодные цены ➢Заказать ☎ 067 708-50-88">
    <meta name="Keywords" content="аренда мерседес, аренда мерседес s, аренда mercedes, аренда мерседес с водителем, прокат мерседес, прокат mercedes, заказ мерседес, мерседес на свадьбу, мерседес свадьба, аренда мерседеса на свадьбу, белый мерседес, белый мерседес на свадьбУ, заказать мерседес на свадьбу, мерседес 222 на свадьбу, прокат мерседеса на свадьбу, мерседес спринтер на свадьбу, машина мерседес на свадьбу, аренда мерседес 222 с водителем, аренда мерседес 221 с водителем, аренда мерседес 222, аренда мерседес 221, аренда мерседес спринтер, такси мерседес, такси mercedes, Chauffeur services, Chauffeur driven Mercedes, Car for hire, mercedes rental, rent mercedes, hire a mercedes, mercedes for rent, order mercedes, white mercedes, mercedes wedding, mercedes taxi, Rent Mercedes sprinter, airport transfer">
    <meta name="yandex-verification" content="589af4a29aa8428f" />

    @include('landing.components.partials.styles')
    @include('landing.components.partials.header_scripts')
</head>
<body>
<section id="main">

    @include('landing.components.header')

    @include('landing.components.overlay')

</section>

@yield('content')

@include('landing.components.partials.scripts')
</body>
</html>