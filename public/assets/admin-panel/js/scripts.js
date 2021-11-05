$(document).ready(function () {

    $('#search').change(function () {
        $('#searchForm').submit();
    });

    $('#seo_description').change(function () {
        $('#seo_description_symbols').html($('#seo_description').val().length);
    });

    $('#seo_title').change(function () {
        $('#seo_title_symbols').html($('#seo_title').val().length);
    });

    /*
    * MULTI-INPUTS
    */
    $("#add_multigroup_gallery").click(function () {
        let countBlocks = $("#multigroup_rates>div").length;
        $("#multigroup_gallery").append(`
        <div class="form-group border-top" id="mgg-${countBlocks}">
            <label>Изображение:</label>
            <input type="file" class="form-control-file" id="gallery" name="gallery[${countBlocks}][image]">

            <div class="form-group mt-1">
                <label>Текст для SEO (alt):</label>
                <input type="text" class="form-control form-control-lg"
                       placeholder="Текст для SEO" id="gallery" name="gallery[${countBlocks}][seo_alt]" />
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-white text-danger btn-sm fw-bold" onclick="removeMultiGroupBlock('#mgg-${countBlocks}')">Удалить
                    блок
                </button>
            </div>
        </div>
        `)
    });


    $("#add_multigroup_rates").click(function () {
        let countBlocks = $("#multigroup_rates>div").length;
        $("#multigroup_rates").append(`
            <div class="form-group border-top" id="mgr-${countBlocks}">
                <div class="form-group mt-1">
                    <label>Количество суток:</label>
                    <input type="text" class="form-control form-control-lg" id="rate_without_driver" name="rate_without_driver[${countBlocks}][days]"
                           placeholder="Количество суток"/>
                </div>
                <div class="form-group mt-1">
                    <label>Стоимость:</label>
                    <input type="text" class="form-control form-control-lg"
                           placeholder="Стоимость" id="rate_without_driver" name="rate_without_driver[${countBlocks}][price]"/>
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-white text-danger btn-sm fw-bold" onclick="removeMultiGroupBlock('#mgr-${countBlocks}')">Удалить
                        блок
                    </button>
                </div>
            </div>
        `)
    });


    $("#delete_multigroup_gallery").click(function () {
        $($(this).closest($(this).closest('div'))).remove()
    });

    /*
   * MULTI-INPUTS END
   */


    function removeImage(car_id, image) {
        $.ajax({
            type: "POST",
            url: "/admin/rent/",
            data: formData,
            cache: false,
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
    }


    if (document.querySelector('form')) {
        document.querySelector('form').addEventListener('submit', (e) => {
            e.preventDefault();
            const form = e.target;
            const data = Object.fromEntries(new FormData(e.target).entries());
            let formData = new FormData();

            $.each(data, function (i, val) {
                formData.append(i, val);
            });

            if ($("select[multiple]")) {
                formData.set($("select[multiple]").attr('name'), $("select[multiple]").val());
            }

            let checkboxes = $("input[type='checkbox']");
            if (checkboxes.length > 0) {
                checkboxes.each(function (index) {

                    let checkbox = $(checkboxes[index]);
                    console.log(checkbox.attr('name'), checkbox.prop('checked'))
                    formData.set(checkbox.attr('name'), checkbox.prop('checked'));
                });
            }

            $.ajax({
                type: $(form).attr('method'),
                url: $(form).attr('action'),
                data: formData,
                cache: false,
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