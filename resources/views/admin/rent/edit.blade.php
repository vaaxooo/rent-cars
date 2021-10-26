@extends('admin.layouts.app')
@section('title', 'Редактирование информации о авто')

@section('content')
    @php $car_categories = explode(',', $car->category_id); @endphp
    <form action="{{ route('admin.rent.cars.edit', ['car' => $car->id]) }}" method="POST">
        @csrf
        <h1 class="display-5 mb-3">Редактирование {{ $car->brand }}</h1>

        <div class="bd-example">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="btn btn-white active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true">Основная информация
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="btn btn-white" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">Изображения и видео
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="btn btn-white" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#rates" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">Цены и категории
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="btn btn-white" id="pills-contact-tab" data-bs-toggle="pill"
                            data-bs-target="#seo" type="button" role="tab" aria-controls="pills-contact"
                            aria-selected="false">SEO
                    </button>
                </li>
            </ul>

            <div class="py-3" id="errors"></div>

            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-muted">Информация о машине</h5>

                            <div class="form-group">
                                <label>Марка машины (RU):</label>
                                <input type="text" class="form-control form-control-lg" placeholder="Марка машины" id="brand" name="brand" value="{{ $car->brand }}">
                            </div>

                            <div class="form-group">
                                <label>Марка машины (EN):</label>
                                <input type="text" class="form-control form-control-lg" placeholder="Марка машины" id="brand_en" name="brand_en" value="{{ $car->brand_en }}">
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Год:</label>
                                        <input type="number" class="form-control form-control-lg" placeholder="Год" id="year" name="year" value="{{ $car->year }}">
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Пассажирских мест:</label>
                                        <input type="number" class="form-control form-control-lg"
                                               placeholder="Пассажирских мест" id="passenger_seats" name="passenger_seats" value="{{ $car->passenger_seats }}">
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <h5 class="text-muted">Характеристики</h5>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Длина, мм:</label>
                                        <input type="number" class="form-control form-control-lg" placeholder="Длина, мм" id="length" name="length" value="{{ $car->length }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Масса, кг:</label>
                                        <input type="number" class="form-control form-control-lg" placeholder="Масса, кг" id="weight" name="weight" value="{{ $car->weight }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Мощность, л.с.:</label>
                                        <input type="number" class="form-control form-control-lg"
                                               placeholder="Мощность, л.с." id="power" name="power" value="{{ $car->power }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Ширина, мм:</label>
                                        <input type="number" class="form-control form-control-lg" placeholder="Ширина, мм" id="width" name="width" value="{{ $car->width }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Багажник, л.:</label>
                                        <input type="number" class="form-control form-control-lg"
                                               placeholder="Багажник, л." id="trunk" name="trunk" value="{{ $car->trunk }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Максимальная скорость, км/ч:</label>
                                        <input type="number" class="form-control form-control-lg"
                                               placeholder="Максимальная скорость, км/ч" id="maximum_speed" name="maximum_speed" value="{{ $car->maximum_speed }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Высота, мм:</label>
                                        <input type="number" class="form-control form-control-lg" placeholder="Высота, мм" id="height" name="height" value="{{ $car->height }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Двигатель объем, л.:</label>
                                        <input type="number" class="form-control form-control-lg"
                                               placeholder="Двигатель объем, л." id="engine_volume" name="engine_volume" value="{{ $car->engine_volume }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Время разгона до 100 км/ч, с:</label>
                                        <input type="number" class="form-control form-control-lg"
                                               placeholder="Время разгона до 100 км/ч, с" id="acceleration_time" name="acceleration_time" value="{{ $car->acceleration_time }}">
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <h5 class="text-muted">
                                Особенности и тип
                                <span class="text-small text-danger font-weight-bold d-block">{{ 'Вы можете использовать H1 и H2 заголовки! Для этого используйте теги: <h1>TEXT</h1> или <h2>TEXT</h2>' }}</span>
                            </h5>

                            <div class="form-group">
                                <label>Выберите тип:</label>
                                <div class="d-flex">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="car_with_driver" name="car_with_driver" @if($car->car_with_driver) checked @endif>
                                        <label class="form-check-label" for="car_with_driver">
                                            С водителем
                                        </label>
                                    </div>
                                    <div class="form-check ml-3">
                                        <input class="form-check-input" type="checkbox" value="" id="car_without_driver" name="car_without_driver" @if($car->car_without_driver) checked @endif>
                                        <label class="form-check-label" for="car_without_driver">
                                            Без водителя
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Особенности (RU):</label>
                                <textarea type="text" class="form-control form-control-lg"
                                          placeholder="Каждая особенность вводится с новой строки" id="peculiarities" name="peculiarities">{{ $car->peculiarities }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Описание авто (RU):</label>
                                <textarea type="text" class="form-control form-control-lg"
                                          placeholder="Описание авто.." id="description" name="description">{{ $car->description }}</textarea>
                            </div>


                            <div class="form-group">
                                <label>Особенности (EN):</label>
                                <textarea type="text" class="form-control form-control-lg"
                                          placeholder="Каждая особенность вводится с новой строки" id="peculiarities_en" name="peculiarities_en">{{ $car->peculiarities_en }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Описание авто (EN):</label>
                                <textarea type="text" class="form-control form-control-lg"
                                          placeholder="Описание авто.." id="description_en" name="description_en">{{ $car->description_en }}</textarea>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="card card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="text-muted">Превью-изображение и видео</h5>


                                <div class="car-preview mb-3">
                                    <img src="{{ asset($car->preview) }}" class="rounded gallery-image" width="100%" alt="{{ $car->brand }}">
                                </div>

                                <div class="form-group">
                                    <label>Выберите превью-изображение для услуги:</label>
                                    <input type="file" id="preview" name="preview">
                                </div>
                                <hr>
                                <div class="form-group">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="enabled_video" name="enabled_video" @if($car->enabled_video) checked @endif>
                                        <label class="form-check-label" for="enabled_video">
                                            Отображать видео на странице с услугой
                                        </label>
                                    </div>

                                    <label>Ссылка на видео:</label>
                                    <input type="text" class="form-control form-control-lg"
                                           placeholder="Укажите ссылку на видео" id="video_url" name="video_url" value="{{ $car->video_url }}">
                                    <span class="text-small"><b class="text-danger">*</b> Необязательное поле</span>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <h5 class="text-muted">Галерея</h5>
                                <div class="multigroup" id="multigroup_gallery">
                                    <div class="form-group">

                                        <label>Изображение:</label>
                                        <input type="file" class="form-control-file" id="gallery" name="gallery[0][image]">

                                        <div class="form-group mt-1">
                                            <label>Текст для SEO (alt):</label>
                                            <input type="text" class="form-control form-control-lg"
                                                   placeholder="Текст для SEO" id="gallery" name="gallery[0][seo_alt]"/>
                                        </div>
                                    </div>

                                </div>

                                <div class="btn btn-success" id="add_multigroup_gallery">Добавить блок</div>

                            </div>
                        </div>
                    </div>

                    @if(isset($car->gallery) && count(json_decode($car->gallery, true)) > 0)
                        <div class="card card-body">
                            <div class="gallery row">
                                @foreach(json_decode($car->gallery) as $galleryImage)
                                    @if(isset($galleryImage->image))
                                        <div class="col-md-4">
                                            <img src="{{ asset($galleryImage->image) }}" class="rounded gallery-image" width="100%" alt="{{ $galleryImage->seo_alt }}">
                                            <a href="{{ route('admin.rent.cars.remove_image', ['car' => $car, 'image' => $galleryImage->image]) }}" class="btn-delete">
                                                Удалить
                                            </a>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endif

                </div>

                <div class="tab-pane fade" id="rates" role="tabpanel" aria-labelledby="rates">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-muted">Цены</h5>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Цена с водителем:</label>
                                        <input type="number" class="form-control form-control-lg"
                                               placeholder="Цена с водителем" id="price_with_driver" name="price_with_driver" value="{{ $car->price_with_driver }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Подача авто:</label>
                                        <input type="number" class="form-control form-control-lg" placeholder="Подача авто" id="car_feed" name="car_feed" value="{{ $car->car_feed }}">
                                    </div>

                                    <hr>

                                    <div class="form-group">
                                        <label>Категория:</label>
                                        <select type="number" class="form-control form-control-lg" id="category_id" name="category_id" multiple>
                                            <option value="" disabled>Выберите категорию</option>
                                            @if(count($categories) > 0)
                                                @foreach($categories as $category)

                                                    <option value="{{ $category->id }}" @if($car_categories[array_search($category->id, $car_categories)] == $category->id) selected @endif>{{ $category->name }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label>Цена без водителя:</label>
                                    <div class="multigroup" id="multigroup_rates">
                                        @foreach(json_decode($car->rate_without_driver) as $key => $rate)
                                            <div class="form-group @if($key > 0) border-top @endif">
                                                <div class="form-group mt-1">
                                                    <label>Количество суток:</label>
                                                    <input type="text" class="form-control form-control-lg" id="rate_without_driver" name="rate_without_driver[][days]"
                                                           placeholder="Количество суток" value="{{ $rate->days }}"/>
                                                </div>
                                                <div class="form-group mt-1">
                                                    <label>Стоимость:</label>
                                                    <input type="text" class="form-control form-control-lg"
                                                           placeholder="Стоимость" id="rate_without_driver" name="rate_without_driver[0][price]" value="{{ $rate->price }}"/>
                                                </div>
                                                @if($key > 0)
                                                    <div class="form-group">
                                                        <button type="button" class="btn btn-white text-danger btn-sm fw-bold" id="delete_multigroup_rates">Удалить
                                                            блок
                                                        </button>
                                                    </div>
                                                @endif
                                            </div>
                                        @endforeach

                                    </div>

                                    <div class="btn btn-success" id="add_multigroup_rates">Добавить блок</div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="seo" role="tabpanel" aria-labelledby="seo">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-muted">SEO</h5>
                            <div class="form-group">
                                <label for="seo_description">Описание (meta description):</label>
                                <textarea class="form-control form-control-lg"
                                       placeholder="Введите описание страницы.." id="seo_description" name="seo_description">{{ $car->seo_tags }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="seo_tags">Теги (meta tags):</label>
                                <input type="text" class="form-control form-control-lg" placeholder="Введите теги страницы.." id="seo_tags" name="seo_tags" value="{{ $car->seo_tags }}">
                                <span class="text-small text-muted"><b class="text-danger">*</b> Каждый новый тег через запятую.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Применить изменения</button>
            <a href="{{ route('admin.rent.cars.delete', ['car' => $car->id]) }}" type="submit" class="btn btn-danger btn-lg">Удалить</a>
        </div>
    </form>

@endsection