@extends('landing.layouts.car')
@section('title', $car->seo_title)
@section('description', $car->seo_description)
@section('keywords', $car->seo_tags)

@section('content')


    <div class="container">
        <div class="row">
            <ul class="breadcrumb">
                <li style="display: inline-block;"><a href="/#gallery">{{ __('Автопарк') }}</a></li>
                <li style="display: inline-block;">{{ $car->brand }}</li>
            </ul>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 single_info">
                    <h1>{{ session()->get('locale') == "ru" ? $car->brand : $car->brand_en }} </h1>
                    <div class="row d_f">
                        <div class="col-md-7 info_left">
                            @if($car->enabled_video && isset($car->video_url))
                                <video class="img-responsive" id="banner-img" width="100%" height="100%" loop="loop" autoplay="autoplay" preload="metadata" webkit-playsinline="true" playsinline="true" muted="">
                                    <source src="{{ $car->video_url }}" class="img-responsive">
                                </video>
                            @else
                                <img class="img-responsive" id="banner-img" style="opacity: 1;" src="{{ asset($car->preview) }}" title="{{ $car->brand }}" alt="{{ $car->seo_tags }}">
                            @endif
                        </div>
                        <div class="col-md-5 info_right">
                            <p class="car_year"><span class="yellow">{{ __('Год') }}:</span> {{ $car->year }}</p>
                            <div class="bord"></div>
                            <p class="total_places"><span class="yellow">{{ __('Пассажирских мест') }}:</span> {{ $car->passenger_seats }}</p>
                            <div class="bord"></div>
                            @if($car->car_with_driver)
                                <p class="car_price"><span class="yellow">{{ __('С водителем') }}:</span> {{ $car->price_with_driver }} {{ __('грн/час') }}  <span class="hcar"><br>({{ __('+1 час подача авто') }})</span></p>
                                <div class="bord"></div>
                            @endif

                            @if($car->transfer && $car->transfer > 0)
                                <p class="out">{{ __('Трансфер') }}: {{ $car->transfer }} / {{ __('грн') }}</p>
                            @endif
                            @if($car->pledge && $car->pledge > 0)
                                <p class="out">{{ __('Залог') }}: {{ $car->pledge }} / {{ __('грн') }}</p>
                            @endif
                            <div class="row">
                                <div class="but_wrap col-xs-6">
                                    <a class="order" data-fancybox="" data-src="#hidden-order{{ $car->id }}" href="javascript:;">{{ __('арендовать') }}</a>
                                </div>
                                <div class="but_wrap col-xs-6">
                                    <a class="calculate" data-fancybox="" data-src="#hidden-calculate" href="javascript:;">{{ __('расcчитать') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 descr">
                    <h4>{{ __('Описание') }}</h4>
                    <div class="row">
                        <div class="col-sm-6">
                            <ul style="">
                                <li><strong>{{ __('Xарактеристики') }}:</strong></li>
                                <li>{{ __('Длина, мм') }}: {{ $car->length }}</li>
                                <li>{{ __('Ширина, мм') }}: {{ $car->width }}</li>
                                <li>{{ __('Высота, мм') }}: {{ $car->height }}</li>
                                <li>{{ __('Масса, кг') }}: {{ $car->weight }}</li>
                                <li>{{ __('Багажник, л.') }}: {{ $car->trunk }}</li>
                                <li>{{ __('Двигатель объем, л.') }}: {{ $car->engine_volume }} </li>
                                <li>{{ __('Мощность, л.с.') }}: {{ $car->power }}</li>
                                <li>{{ __('Максимальная скорость, км/ч') }}: {{ $car->maximum_speed }}</li>
                                <li>{{ __('Время разгона до 100 км/ч, с') }}: {{ $car->acceleration_time }}</li>
                            </ul>
                        </div>
                        <div class="col-sm-6 mob">
                            <ul style="">
                                <li><strong>{{ __('Особенности') }}:</strong></li>
                                @foreach(explode(PHP_EOL, session()->get('locale') == "ru" ? $car->peculiarities : $car->peculiarities_en) as $p)
                                    <li>{{ $p }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row cat_gal d_f2">
                @if(isset($car->gallery))
                    @foreach(json_decode($car->gallery) as $gallery)
                        @if(isset($gallery->image))
                            <div class="col-md-4 col-sm-6 fancybox-thumb">
                                <a class="fancybox-thumb" rel="fancybox-thumb" href="{{ asset($gallery->image) }}" title="{{ $gallery->seo_alt }}">
                                    <img class="img-responsive" src="{{ asset($gallery->image) }}" title="{{ $car->brand }}" alt="{{ $gallery->seo_alt }}">
                                </a>
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>

            @if($car->car_without_driver)
                <div class="seo-descr">
                    <p>{{ $car->brand }} {{ __('аренда') }} @if($car->car_with_driver) {{ __('с водителем') }} / @endif {{ __('без водителя') }}.</p>
                    @if($car->car_with_driver)
                        <p>{{ __('Аренда S-класс с водителем') }}: {{ $car->price_with_driver }} {{ __('грн/час') }}</p>
                    @endif
                    @if($car->car_without_driver)
                        <p>{{ __('Прокат без водителя') }}: </p>
                        <ul>
                            @foreach(json_decode($car->rate_without_driver) as $rate)
                                @if($rate->price && $rate->price > 0)
                                    <li>{{ $rate->days }} {{ __('сутки(ок)') }} - {{ $rate->price }} $</li>
                                @endif
                            @endforeach
                        </ul>
                    @endif
                </div>
            @endif

            <div class="seotx">
                <p>{{{ session()->get('locale') == "ru" ? $car->description : $car->description_en }}}</p>
            </div>
        </div>
    </section>





    <section id="gallery">

        <div class="gallery_bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center block_cars">
                        <h2 class="white">{{ __('ВЫ МОЖЕТЕ ПОСМОТРЕТЬ ДРУГИЕ АВТО') }}</h2>
                        @if(count($categories) > 0)
                            <nav class="menu_cars">
                                <button class="filter current active" data-filter="all">{{ __('Все') }}</button>
                                @foreach($categories as $category)
                                    <button class="filter filt" data-filter=".category-{{ $category->id }}">{{ __($category->name) }}</button>
                                @endforeach
                            </nav>
                        @endif
                    </div>
                </div>
            </div>


            @include('landing.components.cars_card', ['cars' => $cars])


            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center more">
                        <button id="show-more">{{ __('Показать еще') }}</button>
                    </div>
                </div>
            </div>

        </div>
    </section>


    @include('landing.components.modals.call')
    @include('landing.components.modals.order', ['car' => $car])
    @include('landing.components.modals.calculate', ['carName' => $car->brand])



    @include('landing.components.contacts')


    @include('landing.components.footer')

@endsection