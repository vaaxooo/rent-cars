<div style="display: none;" id="hidden-calculate">
    <div class="contact_us calculate">
        <h2 class="black">{{ __('Рассчитать стоимость заказа') }}</h2>
        <form method="post" action="{{ route('landing.form.order') }}" novalidate="novalidate">
            @csrf
            <div class="form-group">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input id="name" name="name" type="text" class="form-control" placeholder="{{ __('Имя') }}" required="" aria-required="true">
            </div>
            <div class="row">
                <div class="form-group col-sm-5">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <input id="phone" name="phone" type="tel" class="form-control" placeholder="{{ __('Телефон') }}" required="" aria-required="true">
                </div>
                <div class="form-group col-sm-7">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <input id="email" name="email" type="email" class="form-control" placeholder="Email" required="" aria-required="true">
                </div>
                <div class="clearfix"></div>
            </div>
            <input type="hidden" id="type" name="type" value="calculate" />
            <input type="hidden" id="car" name="car" value="{{ $carName }}" />

            <div class="row">
                <div class="form-group col-sm-12">
                    <i class="fa fa-calendar" aria-hidden="true"></i>
                    <input id="date" name="date" type="text" class="form-control" placeholder="{{ __('Дата заказа') }}" required="" aria-required="true">
                </div>
                <div class="form-group col-sm-12">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <textarea cols="30" rows="1" id="time" name="time" type="text" class="form-control time_area" placeholder="{{ __("Время работы авто (например:'09:00‑17:00')") }}" required="" aria-required="true"></textarea>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="form-group">
                <i class="fa fa-pencil" aria-hidden="true"></i>
                <textarea id="comment" name="comment" cols="30" rows="5" placeholder="{{ __('Пожелания или комментарии к заказу') }}"></textarea>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-xs-4 col-sm-1"><input type="checkbox" name="driver" id="driver"></div>
                    <div class="col-xs-12 col-sm-11"><label for="driver" class="driver-label">{{ __('Взять в прокат без водителя') }}</label></div>
                </div>
            </div>
            <div class="result"></div>
            <div class="row">
                <div class="form-group col-sm-6">
                    <button type="submit" class="subm subm_order">{{ __('рассчитать') }}</button>
                </div>
            </div>
        </form>
    </div>
    <button data-fancybox-close="" class="fancybox-close-small"></button></div>