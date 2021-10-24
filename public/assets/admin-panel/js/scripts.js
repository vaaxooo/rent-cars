$(document).ready(function () {


    $("#add_multigroup_gallery").click(function(){
        $("#multigroup_gallery").append(`
        <div class="form-group" id="multiblock">
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
        `)
    });


    $("#delete_multigroup_gallery").click(function(){
    console.log($(this).closest($(this).closest('div')))
        $($(this).closest($(this).closest('div'))).remove()
    });


    if(document.querySelector('form')){
        document.querySelector('form').addEventListener('submit', (e) => {
            e.preventDefault();
            const form = e.target;
            const data = Object.fromEntries(new FormData(e.target).entries());
            let formData = new FormData();

            $.each(data, function(i, val) {
              formData.append(i, val);
            });

            $.ajax({
                type: $(form).attr('method'),
                url: $(form).attr('action'),
                data: formData,
                cache : false,
                processData: false,
                contentType: false,
                success: function (data) {
                    $('#message').html('');
                    $('#errors').html('');
                    if (!data.status) {
                        let errors = JSON.parse(data.errors);
                        for (let field in errors) {
                            $("#errors").append(`<span class="text-danger d-block"><em class="icon ni ni-cross"></em> ${errors[field]}</span>`);
                        }
                    }
                    if (data.status && data.redirect) {
                        window.location.href = data.redirect;
                    }

                    if (data.status && !data.redirect && data.message) {
                        $("#message").append(`<span class="text-success d-block"><em class="icon ni ni-check"></em> ${data.message}</span>`);
                    }

                }
            });
        });
    }

});