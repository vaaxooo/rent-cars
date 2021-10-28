<div style="display: none;" id="hidden-call">
    <div class="contact_us">
        <h2 class="black">{{ __('обратный звонок') }}</h2>
        <form method="post" action="{{ route('landing.form.call') }}" novalidate="novalidate">
            @csrf
            <div id="errors"></div>
            <div class="form-group">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input id="name" name="name" type="text" class="form-control" placeholder="{{ __('Имя') }}" required>
            </div>
            <div class="form-group">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <input id="phone" name="phone" type="tel" class="form-control" placeholder="{{ __('Телефон') }}" required>
            </div>
            <div class="result"></div>
            <div class="form-group">
                <button type="submit" class="subm">{{ __('заказать звонок') }}</button>
            </div>
        </form>
    </div>
</div>