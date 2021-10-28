<div style="display: none; background-color: #FDC210;" id="hidden-order{{ $car->id }}">
    <div class="contact_us order" style="width: 650px;">
        <h2 class="black">{{ __('Арендовать автомобиль') }}</h2>
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

            <input type="hidden" id="select2" name="select2" value=" - ">
            <input type="hidden" id="type" name="type" value="order">
            <input type="hidden" id="car" name="car" value="{{ $car->brand }}">

            <div class="form-group">
                <i class="fa fa-calendar" aria-hidden="true"></i>
                <input id="date" name="date" type="text" class="form-control" placeholder="{{ __('Дата заказа') }}" required="" aria-required="true">
            </div>

            <!-- <div class="form-group">
               <i class="fa fa-clock-o" aria-hidden="true"></i><textarea cols="30" rows="1" id="ftime" name="ftime" type="text" class="form-control time_area" placeholder="Время работы авто (например:'09:00&#8209;17:00')" required></textarea>
            </div> -->

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
            <div class="form-group">
                <button type="submit" class="subm subm_order">{{ __('арендовать') }}</button>
            </div>
        </form>
    </div>
</div>