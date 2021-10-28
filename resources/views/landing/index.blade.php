@extends('landing.layouts.app')
@section('title', 'Аренда Mercedes (Киев) Прокат с водителем и без | arenda-mercedes.kiev.ua')

@section('content')


    <section id="about">
        <div class="about_bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 about">
                        <h2 class="text-center black">{{ __('О компании') }}</h2>
                        <p>{!!  __('Наша компания специализируется на аренде автомобилей марки Mercedes-Benz. Мы предоставляем полный спектр услуг по аренде автомобилей с водителем и без водителя. В автопарке представлены легковые машины, внедорожники, минивэны и микроавтобусы всемирно известной марки. Это позволяет нам обслуживать различные заказы на самом высоком уровне. <strong>Наша миссия:</strong> Дать Вам Абсолютный Комфорт в Дороге! Именно поэтому наша компания предоставляет в аренду автомобили марки Mercedes-Benz.') !!}</p>
                    </div>
                    <div class="col-lg-8 col-lg-offset-2">
                        <hr style="width: 185px">
                        <h2 class="text-center black">{{ __('Почему стоит заказать у нас?') }}</h2>
                        <hr style="width: 100px">
                    </div>
                    <div class="block col-xs-12">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <div class="block_li row">
                                    <div class="col-sm-6 li_left">
                                        <ul>
                                            <li>{{ __('Крупнейший автопарк') }}</li>
                                            <li>{{ __('Исключительно MERCEDES') }}</li>
                                            <li>{{ __('Аренда с водителем и без водителя') }}</li>
                                            <li>{{ __('Опыт работы более 10 лет') }}</li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 li_right">
                                        <ul>
                                            <li>{{ __('Работаем без выходных') }}</li>
                                            <li>{{ __('Удобные способы оплаты') }}</li>
                                            <li>{{ __('Выгодные цены') }}</li>
                                            <li>{{ __('Более 1000 довольных клиентов') }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="block_how hidden visible-lg"></div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-lg-offset-2 mission">
                        <!-- <p><strong>Наша миссия:</strong> Дать Вам Абсолютный Комфорт в Дороге!</p> -->
                        <!-- <p><strong>Именно поэтому наша компания предоставляет в аренду автомобили марки Mercedes-Benz.</strong></p> -->
                        <p><strong>{{ __('При необходимости Вас будут обслуживать водители со знанием английского языка.') }}</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="gallery">

        <div class="gallery_bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center block_cars">
                        <div class="video_wrap">
                            <video preload="none" src="{{ asset('/assets/landing/(Промо-ролик) arenda-mercedes.kiev.ua.m4v') }}" controls="" poster="{{ asset('assets/landing/video.webp') }}"></video>
                        </div>
                        <h2 class="white">{{ __('Автопарк') }}</h2>
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



        <div class="job_bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 job_wrap">
                        <h2 class="text-center">{{ __('Как мы работаем') }}</h2>
                        <div class="col-sm-3 jobs">
                            <img src="{{ asset('/assets/landing/images/job1.webp') }}" class="lazyload" alt="">
                            <img class="dots" src="{{ asset('/assets/landing/images/dots.webp') }}" alt="">
                            <p>{{ __('Прием звонка или заявки через электронную почту') }}</p>
                        </div>

                        <div class="col-sm-3 jobs">
                            <img class="lazyload" data-src="{{ asset('/assets/landing/images/job2.webp') }}" alt="" src="{{ asset('/assets/landing/images/job2.webp') }}">
                            <img class="dots" src="{{ asset('/assets/landing/images/dots.webp') }}" alt="">
                            <p>{{ __('Уточнение деталей и прием предоплаты') }}</p>
                        </div>

                        <div class="col-sm-3 jobs">
                            <img class="lazyload" data-src="{{ asset('/assets/landing/images/job3.webp') }}" alt="" src="{{ asset('/assets/landing/images/job3.webp') }}">
                            <img class="dots" src="{{ asset('/assets/landing/images/dots.webp') }}" alt="">
                            <p>{{ __('Качественное обслуживание мероприятия') }}</p>
                        </div>
                        <div class="col-sm-2 jobs">
                            <img class="lazyload" data-src="{{ asset('/assets/landing/images/job4.webp') }}" alt="" src="{{ asset('/assets/landing/images/job4.webp') }}">
                            <p>{{ __('Окончательный расчет') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="faq_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 faq_wrap">
                        <h2 class="text-center white">{{ __('часто задаваемые вопросы') }}</h2>
                        <table>
                            <tbody>
                            <tr>
                                <td class="left"><img class="lazyload" data-src="{{ asset('/assets/landing/images/faq_img.webp') }}" alt="" src="{{ asset('/assets/landing/images/faq_img.webp') }}"></td>
                                <td class="right">{!! __('<span>У вас можно арендовать Мерседес с водителем и без?</span><br> Да, Вы можете заказать почасовую аренду машины с профессиональным водителем, а также взять посуточно в аренду без водителя.')  !!}</td>
                            </tr>
                            <tr>
                                <td class="left"><img class="lazyload" data-src="{{ asset('/assets/landing/images/faq_img.webp') }}" alt="" src="{{ asset('/assets/landing/images/faq_img.webp') }}"></td>
                                <td class="right">{!! __('<span>Что такое +1 час за подачу автомобиля?</span><br> Это 30 минут автомобиль едет к Вам на адрес и 30 минут после заказа возвращается в гараж.') !!}
                                </td>
                            </tr>
                            <tr>
                                <td class="left"><img class="lazyload" data-src="{{ asset('/assets/landing/images/faq_img.webp') }}" alt="" src="{{ asset('/assets/landing/images/faq_img.webp') }}"></td>
                                <td class="right">{!! __('<span>Какое минимальное количество часов аренды?</span><br> С понедельника по четверг - 3 часа. Пятница, суббота - 5 часов. Воскресенье - 4 часа.') !!}
                                </td>
                            </tr>
                            <tr>
                                <td class="left"><img class="lazyload" data-src="{{ asset('/assets/landing/images/faq_img.webp') }}" alt="" src="{{ asset('/assets/landing/images/faq_img.webp') }}"></td>
                                <td class="right">{!! __('<span>Выезд из Киева оплачивается дополнительно?</span><br> Выезд из Киева до 20 км оплачивается: плюс один час к стоимости аренды, свыше 20 км оплачивается общий километраж в две стороны.') !!}
                                </td>
                            </tr>
                            <tr>
                                <td class="left"><img class="lazyload" data-src="{{ asset('/assets/landing/images/faq_img.webp') }}" alt="" src="{{ asset('/assets/landing/images/faq_img.webp') }}"></td>
                                <td class="right">{!! __('<span>Машина подаётся чистая?</span><br> Автомобиль приезжает на заказ после автомойки (комплексная мойка автомобиля).') !!}
                                </td>
                            </tr>

                            <tr>
                                <td class="left"><img class="lazyload" data-src="{{ asset('/assets/landing/images/faq_img.webp') }}" alt="" src="{{ asset('/assets/landing/images/faq_img.webp') }}"></td>
                                <td class="right">{!! __('<span>Машина будет вовремя?</span><br> Автомобиль приезжает на указанный адрес  за 10 минут до заказа.') !!}
                                </td>
                            </tr>
                            <tr>
                                <td class="left"><img class="lazyload" data-src="{{ asset('/assets/landing/images/faq_img.webp') }}" alt="" src="{{ asset('/assets/landing/images/faq_img.webp') }}"></td>
                                <td class="right">{!! __('<span>Какие у Вас водители?</span><br> В нашей компании работают только профессионалы с опытом работы<span><br></span> в с сфере обслуживания VIP клиентов.')  !!}
                                </td>
                            </tr>
                            </tbody></table>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <section id="reviews">
        <div class="review_bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 review_wrap">
                        <h2 class="black text-center">Отзывы</h2>
                        <div class="owl-carousel owl-theme">
                            <div><img src="{{ asset('/assets/landing/images/review_man.webp') }}" alt="">
                                <div  itemprop="review" itemscope itemtype="https://schema.org/Review" class="cap text-center">
                                    <span itemprop="author" itemscope itemtype="https://schema.org/Person"><h4  itemprop="name">Денис</h4></span>
                                    <!-- <p class="date">19.03.2017</p> -->
                                    <p class="text"><span itemprop="reviewBody">С первых минут разговора с менеджером становится понятно, что сервис серьёзный и тебе ответят вежливо на все вопросы и помогут с выбором. Брали Мерседес w213, автомобиль был подан в назначенное время идеально чистым. Водитель выше всяких похвал, настоящий профессионал своего дела, внимательный, манерный и в костюме :) . Пока ждал нас на локациях быстро решил одну форс мажорную ситуацию. В общем только положительные эмоции от сервиса от самого начала и до конца, всем рекомендую!</span></p>
                                </div>
                            </div>
                            <div><img src="{{ asset('assets/imalanding/ges/review_woman.webp') }}" alt="">
                                <div class="cap text-center">
                                    <h4>Екатерина</h4>
                                    <!-- <p class="date">19.03.2017</p> -->
                                    <p class="text">Заказывали на подарок молодым белый Mercedes S- класса. Все было супер, авто прибыло во время, чистое и ухоженное! Водитель вежливый и обходительный. Спасибо большое Вам! Молодым очень понравилось!</p>
                                </div>
                            </div>
                            <div><img src="{{ asset('assets/landing/images/review_man.webp') }}" alt="">

                                <div class="cap text-center">
                                    <h4>Антон</h4>
                                    <!-- <p class="date">19.03.2017</p> -->
                                    <p class="text">Доброго времени суток. Заказывали Mercedes-Benz GL 350 на свадьбу. Остались очень довольны и автомобилем, и водителем, и сервисом. В компании идут на встречу клиентам, да и вообще всё было достойно и на высоте! Всем рекомендуем эту компанию!</p>
                                </div>
                            </div>
                            <div><img src="{{ asset('/assets/landing/images/review_man.webp') }}" alt="">
                                <div class="cap text-center">
                                    <h4>Александр</h4>
                                    <!-- <p class="date">19.03.2017</p> -->
                                    <p class="text">Заказывали новый Mercedes E250. Спасибо за отличный сервис, все было на высоте!</p>
                                </div>
                            </div>
                            <div><img src="{{ asset('/assets/landing/images/review_woman.webp') }}" alt="">
                                <div class="cap text-center">
                                    <h4>Вероника</h4>
                                    <!-- <p class="date">19.03.2017</p> -->
                                    <p class="text">Современные принцессы на свадьбу не приезжают на каретах, они приезжают на крутых авто. Именно такой принцессой на своей свадьбе почувствовала себя я, взяв в аренду белый Mercedes E- class. Автомобиль на 23 июля заказывали заранее, так как дата популярная. Сервис понравился сразу, менеджер вселил уверенность, что всё будет именно так, как мы хотим. Так и случилось! Автомобиль был подан даже раньше назначенного времени, идеально чистый и сверкающий! Водитель Дмитрий выглядел элегантно, очень внимательный, интеллигентный, помог с декором автомобиля. Ненавязчиво поддерживал разговор. Очень профессиональный. Хотим с моим мужем Димой поблагодарить Вас за то, что делаете свою работу на высшем уровне и помогаете сделать особенный день идеальным! Уже рекомендуем Вас всем друзьям!!!</p>
                                </div>
                            </div>
                            <div><img src="{{ asset('/assets/landing/images/review_man.webp') }}" alt="">
                                <div class="cap text-center">
                                    <h4>Андрей</h4>
                                    <!-- <p class="date">19.03.2017</p> -->
                                    <p class="text">Новый Мерседес S-класс 222 на свадьбу очень хотела моя жена, я с ней согласился, хотя думал о более скромном авто. Но хочу Вам сказать, машина на 110% стоит своих денег, а сервис и профессионализм водителя вообще отдельная тема, сразу понимаешь, что платишь не просто за люксовый авто, но и за сервис люкс. Все на 5+. Большое спасибо.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('landing.components.contacts')


    @include('landing.components.footer')


    @include('landing.components.modals.call')

@endsection