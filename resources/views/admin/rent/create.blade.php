@extends('admin.layouts.app')
@section('title', 'Добавление нового авто')

@section('content')

    <h1 class="display-5 mb-3">Добавление нового авто</h1>


    <div class="bd-example">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link btn btn-white active" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true">RU
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link  btn btn-white" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">EN
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link  btn btn-white" id="pills-contact-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                        aria-selected="false">Изображения и видео
                </button>
                <button class="nav-link  btn btn-white" id="pills-contact-tab" data-bs-toggle="pill"
                        data-bs-target="#rates" type="button" role="tab" aria-controls="pills-contact"
                        aria-selected="false">Цены
                </button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-muted">RU</h4>
                        <h5 class="text-muted">Информация о машине</h5>

                        <div class="form-group">
                            <label>Марка машины:</label>
                            <input type="text" class="form-control form-control-lg" placeholder="Марка машины">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Год:</label>
                                    <input type="number" class="form-control form-control-lg" placeholder="Год">
                                </div>
                                <div class="form-group">
                                    <label>Цена с водителем:</label>
                                    <input type="number" class="form-control form-control-lg"
                                           placeholder="Цена с водителем">
                                </div>
                                <div class="form-group">
                                    <label>Подача авто:</label>
                                    <input type="number" class="form-control form-control-lg" placeholder="Подача авто">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Пассажирских мест:</label>
                                    <input type="number" class="form-control form-control-lg"
                                           placeholder="Пассажирских мест">
                                </div>
                                <div class="form-group">
                                    <label>Цена без водителя:</label>
                                    <input type="number" class="form-control form-control-lg"
                                           placeholder="Цена без водителя">
                                    <span class="text-small"><b class="text-danger">*</b> Оставьте пустым поле, если услуга "без водителя" не предоставляется!</span>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <h5 class="text-muted">Характеристики</h5>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Длина, мм:</label>
                                    <input type="number" class="form-control form-control-lg" placeholder="Длина, мм">
                                </div>
                                <div class="form-group">
                                    <label>Масса, кг:</label>
                                    <input type="number" class="form-control form-control-lg" placeholder="Масса, кг">
                                </div>
                                <div class="form-group">
                                    <label>Мощность, л.с.:</label>
                                    <input type="number" class="form-control form-control-lg"
                                           placeholder="Мощность, л.с.">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Ширина, мм:</label>
                                    <input type="number" class="form-control form-control-lg" placeholder="Ширина, мм">
                                </div>
                                <div class="form-group">
                                    <label>Багажник, л.:</label>
                                    <input type="number" class="form-control form-control-lg"
                                           placeholder="Багажник, л.">
                                </div>
                                <div class="form-group">
                                    <label>Максимальная скорость, км/ч:</label>
                                    <input type="number" class="form-control form-control-lg"
                                           placeholder="Максимальная скорость, км/ч">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Высота, мм:</label>
                                    <input type="number" class="form-control form-control-lg" placeholder="Высота, мм">
                                </div>
                                <div class="form-group">
                                    <label>Двигатель объем, л.:</label>
                                    <input type="number" class="form-control form-control-lg"
                                           placeholder="Двигатель объем, л.">
                                </div>
                                <div class="form-group">
                                    <label>Время разгона до 100 км/ч, с:</label>
                                    <input type="number" class="form-control form-control-lg"
                                           placeholder="Время разгона до 100 км/ч, с">
                                </div>
                            </div>
                        </div>

                        <hr>

                        <h5 class="text-muted">Особенности</h5>
                        <div class="form-group">
                            <textarea type="text" class="form-control form-control-lg"
                                      placeholder="Каждая особенность вводится с новой строки"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Описание авто:</label>
                            <textarea type="text" class="form-control form-control-lg"
                                      placeholder="Описание авто.."></textarea>
                        </div>

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-muted">EN</h4>
                        <h5 class="text-muted">Информация о машине</h5>

                        <div class="form-group">
                            <label>Марка машины:</label>
                            <input type="text" class="form-control form-control-lg" placeholder="Марка машины">
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Год:</label>
                                    <input type="number" class="form-control form-control-lg" placeholder="Год">
                                </div>
                                <div class="form-group">
                                    <label>Цена с водителем:</label>
                                    <input type="number" class="form-control form-control-lg"
                                           placeholder="Цена с водителем">
                                </div>
                                <div class="form-group">
                                    <label>Подача авто:</label>
                                    <input type="number" class="form-control form-control-lg" placeholder="Подача авто">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Пассажирских мест:</label>
                                    <input type="number" class="form-control form-control-lg"
                                           placeholder="Пассажирских мест">
                                </div>
                                <div class="form-group">
                                    <label>Цена без водителя:</label>
                                    <input type="number" class="form-control form-control-lg"
                                           placeholder="Цена без водителя">
                                    <span class="text-small"><b class="text-danger">*</b> Оставьте пустым поле, если услуга "без водителя" не предоставляется!</span>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <h5 class="text-muted">Характеристики</h5>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Длина, мм:</label>
                                    <input type="number" class="form-control form-control-lg" placeholder="Длина, мм">
                                </div>
                                <div class="form-group">
                                    <label>Масса, кг:</label>
                                    <input type="number" class="form-control form-control-lg" placeholder="Масса, кг">
                                </div>
                                <div class="form-group">
                                    <label>Мощность, л.с.:</label>
                                    <input type="number" class="form-control form-control-lg"
                                           placeholder="Мощность, л.с.">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Ширина, мм:</label>
                                    <input type="number" class="form-control form-control-lg" placeholder="Ширина, мм">
                                </div>
                                <div class="form-group">
                                    <label>Багажник, л.:</label>
                                    <input type="number" class="form-control form-control-lg"
                                           placeholder="Багажник, л.">
                                </div>
                                <div class="form-group">
                                    <label>Максимальная скорость, км/ч:</label>
                                    <input type="number" class="form-control form-control-lg"
                                           placeholder="Максимальная скорость, км/ч">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Высота, мм:</label>
                                    <input type="number" class="form-control form-control-lg" placeholder="Высота, мм">
                                </div>
                                <div class="form-group">
                                    <label>Двигатель объем, л.:</label>
                                    <input type="number" class="form-control form-control-lg"
                                           placeholder="Двигатель объем, л.">
                                </div>
                                <div class="form-group">
                                    <label>Время разгона до 100 км/ч, с:</label>
                                    <input type="number" class="form-control form-control-lg"
                                           placeholder="Время разгона до 100 км/ч, с">
                                </div>
                            </div>
                        </div>

                        <hr>

                        <h5 class="text-muted">Особенности</h5>
                        <div class="form-group">
                            <textarea type="text" class="form-control form-control-lg"
                                      placeholder="Каждая особенность вводится с новой строки"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Описание авто:</label>
                            <textarea type="text" class="form-control form-control-lg"
                                      placeholder="Описание авто.."></textarea>
                        </div>

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="card card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="text-muted">Превью-изображение и видео</h5>
                            <div class="form-group">
                                <label>Выберите превью-изображение для услуги:</label>
                                <input type="file">
                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="form-check mb-2">
                                    <input class="form-check-input" type="checkbox" value="" id="enabled_video">
                                    <label class="form-check-label" for="enabled_video">
                                        Отображать видео на странице с услугой
                                    </label>
                                </div>

                                <label>Ссылка на видео:</label>
                                <input type="text" class="form-control form-control-lg"
                                       placeholder="Укажите ссылку на видео">
                                <span class="text-small"><b class="text-danger">*</b> Необязательное поле</span>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <h5 class="text-muted">Галерея</h5>
                            <div class="multigroup" id="multigroup_gallery">
                                <div class="form-group">
                                    <label>Изображение:</label>
                                    <input type="file" class="form-control-file">

                                    <div class="form-group mt-1">
                                        <label>Текст для SEO (alt):</label>
                                        <input type="text" class="form-control form-control-lg"
                                               placeholder="Текст для SEO"/>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-white text-danger btn-sm fw-bold" id="delete_multigroup_gallery">Удалить
                                            блок
                                        </button>
                                    </div>
                                </div>

                            </div>

                            <div class="btn btn-success" id="add_multigroup_gallery">Добавить блок</div>

                        </div>
                    </div>
                </div>
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
                                           placeholder="Цена с водителем">
                                </div>
                                <div class="form-group">
                                    <label>Подача авто:</label>
                                    <input type="number" class="form-control form-control-lg" placeholder="Подача авто">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Пассажирских мест:</label>
                                    <input type="number" class="form-control form-control-lg"
                                           placeholder="Пассажирских мест">
                                </div>
                                <div class="form-group">
                                    <label>Цена без водителя:</label>
                                    <input type="number" class="form-control form-control-lg"
                                           placeholder="Цена без водителя">
                                    <span class="text-small"><b class="text-danger">*</b> Оставьте пустым поле, если услуга "без водителя" не предоставляется!</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg">Добавить услугу</button>
    </div>

@endsection