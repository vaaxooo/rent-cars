@if(count($cars) > 0)
<div id="Container" class="container-fluid">
    <div class="row">
        @foreach($cars as $car)
        @php $car_categories = explode(',', $car->category_id) @endphp
        <div class="col-lg-3 col-md-4 col-sm-6 mix @foreach($car_categories as $c) category-{{ $c }} @endforeach" data-my-order="37" style="display: inline-block;" data-bound="">
            <div class="catalog_img_item lazyload" data-src="{{ asset($car->preview) }}" style="background-position: right center; height: 452px; background-image: url({{ asset($car->preview) }});"></div>
            <div class="mask">
                <p class="car_model yellow">{{ $car->brand }}</p>
                <p class="car_year"><span class="yellow">{{ __('Год') }}:</span> {{ $car->year }}</p>
                <p class="total_places"><span class="yellow">{{ __('Пассажирских мест') }}:</span> {{ $car->passenger_seats }}</p>
                <p class="car_price"><span class="yellow">{{ __('С водителем') }}:</span> {{ $car->price_with_driver }} {{ __('грн/час') }}</p>
                <p class="filling_time">{{ __('Трансфер') }}: {{ $car->car_feed }} {{ __('грн') }}</p>
                <!-- <p class="out">Выезд за Киев- 50 грн/км.</p> -->
                <div class="but_wrap">
                    <a class="more" href="{{ route('landing.car', ['car_url' => $car->url]) }}">{{ __('подробнее') }}</a>
                    <a class="order" data-fancybox="" data-src="#hidden-order{{ $car->id }}" href="javascript:;">{{ __('арендовать') }}</a>
                </div>
            </div>
        </div>
            @include('landing.components.modals.order', ['car' => $car])
        @endforeach
        {{--<div id="more" class="hiddens">
            <div class="col-lg-3 col-md-4 col-sm-6 mix category-1" data-my-order="4" style="display: inline-block;" data-bound="">

                <!-- <img class="img-responsive" src="./images/W221_S600L_AMG_2012_b.webp" alt=""> -->

                <div class="catalog_img_item lazyload" data-src="./img_new/catalog_backgrounds/ГлавнаяMercedes-w221-S600-long.webp" style="background-position: right center; height: 452px;"></div>

                <div class="mask">

                    <p class="car_model yellow">Mercedes w221 S600 Long</p>

                    <p class="car_year"><span class="yellow">Год:</span> 2012</p>

                    <p class="total_places"><span class="yellow">Пассажирских мест:</span> 4</p>

                    <p class="car_price"><span class="yellow">С водителем:</span> 600 грн/час</p>

                    <p class="filling_time">Трансфер: 2300грн</p>

                    <!-- <p class="out">Выезд за Киев- 15 грн/км.</p> -->

                    <div class="but_wrap">

                        <a class="more" href="/Ru/Mercedes_w221_S600_Long.html">подробнее</a>

                        <a class="order" data-fancybox="" data-src="#hidden-order" href="javascript:;">арендовать</a>

                    </div>

                </div>

            </div>
        </div>--}}
    </div>
</div>
@endif