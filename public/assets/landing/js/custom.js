$(document).ready(function() {



	$(".but_wrap a.order").click(function() {



		var e = $(this).parent().parent().find(".car_model").text(),



			t = $(this).parent().parent().find(".car_year").text().replace("Год: ", "");



		$("input#select2").val(e + " - " + t)



	}), $("#select5").val($("h1").text().replace("Аренда ", "") + $(".single_info .car_year").text().replace("Год:", "")), $("#Container").mixItUp(), $(".owl-carousel").owlCarousel({



		center: !0,



		items: 1,



		loop: !0,



		autoplay: !0,



		autoplayTimeout: 25e3,



		margin: 10,



		responsive: {



			320: {



				items: 1



			},



			768: {



				items: 3



			},



			1200: {



				items: 5



			}



		}



	});



	var a = ".navmenus";







	function r() {



		var r = $(document).scrollTop();



		$(a + " a").each(function() {



			var e = $(this).attr("href"),



				t = $(e);



			t.position().top - 120 <= r && t.position().top + t.outerHeight() > r ? ($(a + " a.active").removeClass("active"), $(this).addClass("active")) : $(this).removeClass("active")



		})



	}



	var e, t, s = window.location.hash;



	window.location.hash = "", setTimeout(function() {



		s && (target = $("header a[href^=" + s + "]:visible"), 0 < target.length && ($(a + " a.active").removeClass("active"), target.addClass("active"), "#reviews" === s ? setTimeout(function() {



			target.click()



		}, 1200) : target.click()))



	}, 500), $(document).on("scroll", r), $("a[href^=#]").click(function(e) {



		e.preventDefault(), e.stopPropagation(), $(document).off("scroll"), $(a + " a.active").removeClass("active"), $(this).addClass("active");



		var t = $(this).attr("href");



		! function(e) {



			$(window).width() <= 767 ? $("html, body").animate({



				scrollTop: e.offset().top - 30



			}, 800, function() {



				$(document).on("scroll", r)



			}) : $(window).width() <= 991 ? $("html, body").animate({



				scrollTop: e.offset().top - 115



			}, 800, function() {



				$(document).on("scroll", r)



			}) : $(window).width() <= 1199 ? $("html, body").animate({



				scrollTop: e.offset().top - 110



			}, 800, function() {



				$(document).on("scroll", r)



			}) : $("html, body").animate({



				scrollTop: e.offset().top - 80



			}, 800, function() {



				$(document).on("scroll", r)



			})



		}($(t))



	}), $(".menu_cars").on("click", "button", function(e) {



		$(this).addClass("current").siblings().removeClass("current"), e.preventDefault()



	}), $("#show-more").click(function() {



		$("#more").show().removeClass("hiddens"), $(this).hide(), $("#more").css('height', 'auto');



	}), jQuery.validator.addMethod("lettersonly", function(e, t) {



		return this.optional(t) || /^[а-яА-Яa-zA-Z]+$/i.test(e)



	}, "Letters only please"), $("#callForm").validate({



		rules: {



			firstname: {



				required: !0,



				lettersonly: !0,



				minlength: 2,



				maxlength: 20



			},



			tel: {



				required: !0,



				number: !0,



				minlength: 10,



				maxlength: 10



			}



		},



		messages: {



			firstname: {



				required: "Введите свое имя",



				lettersonly: "Только буквы",



				minlength: "Минимум 2 буквы",



				maxlength: "Не более 20 букв"



			},



			tel: {



				required: "Введите ваш номер телефона",



				number: "Только цифры",



				minlength: "Минимум 10 цифр",



				maxlength: "Не более 10 цифр"



			}



		},



		errorElement: "em",



		errorPlacement: function(e, t) {



			e.addClass("help-block"), "checkbox" === t.prop("type") ? e.insertAfter(t.parent("label")) : e.insertAfter(t)



		},



		highlight: function(e, t, r) {



			$(e).parents(".form-group").addClass("has-error").removeClass("has-success")



		},



		unhighlight: function(e, t, r) {



			$(e).parents(".form-group").addClass("has-success").removeClass("has-error")



		}



	}), $("#callForm1").validate({



		rules: {



			firstname1: {



				required: !0,



				lettersonly: !0,



				minlength: 2,



				maxlength: 20



			},



			tel1: {



				required: !0,



				number: !0,



				minlength: 10,



				maxlength: 10



			}



		},



		messages: {



			firstname1: {



				required: "Введите свое имя",



				lettersonly: "Только буквы",



				minlength: "Минимум 2 буквы",



				maxlength: "Не более 20 букв"



			},



			tel1: {



				required: "Введите ваш номер телефона",



				number: "Только цифры",



				minlength: "Минимум 10 цифр",



				maxlength: "Не более 10 цифр"



			}



		},



		errorElement: "em",



		errorPlacement: function(e, t) {



			e.addClass("help-block"), "checkbox" === t.prop("type") ? e.insertAfter(t.parent("label")) : e.insertAfter(t)



		},



		highlight: function(e, t, r) {



			$(e).parents(".form-group").addClass("has-error").removeClass("has-success")



		},



		unhighlight: function(e, t, r) {



			$(e).parents(".form-group").addClass("has-success").removeClass("has-error")



		}



	}), $("#callForm2").validate({



		rules: {



			firstname4: {



				required: !0,



				lettersonly: !0,



				minlength: 2,



				maxlength: 20



			},



			tel4: {



				required: !0,



				number: !0,



				minlength: 10,



				maxlength: 10



			}



		},



		messages: {



			firstname4: {



				required: "Введите свое имя",



				lettersonly: "Только буквы",



				minlength: "Минимум 2 буквы",



				maxlength: "Не более 20 букв"



			},



			tel4: {



				required: "Введите ваш номер телефона",



				number: "Только цифры",



				minlength: "Минимум 10 цифр",



				maxlength: "Не более 10 цифр"



			}



		},



		errorElement: "em",



		errorPlacement: function(e, t) {



			e.addClass("help-block"), "checkbox" === t.prop("type") ? e.insertAfter(t.parent("label")) : e.insertAfter(t)



		},



		highlight: function(e, t, r) {



			$(e).parents(".form-group").addClass("has-error").removeClass("has-success")



		},



		unhighlight: function(e, t, r) {



			$(e).parents(".form-group").addClass("has-success").removeClass("has-error")



		}



	}), $("#order").validate({



		rules: {



			firstname2: {



				required: !0,



				lettersonly: !0,



				minlength: 2,



				maxlength: 20



			},



			tel2: {



				required: !0,



				number: !0,



				minlength: 10,



				maxlength: 10



			},



			email2: {



				required: !0,



				email: !0



			},



			select_hidden: "required",



			date2: "required",



			ftime2: "required",



			address2: {



				required: !0,



				maxlength: 80



			},



			stime2: "required"



		},



		messages: {



			firstname2: {



				required: "Введите свое имя",



				lettersonly: "Только буквы",



				minlength: "Минимум 2 буквы",



				maxlength: "Не более 20 букв"



			},



			tel2: {



				required: "Введите ваш номер телефона",



				number: "Только цифры",



				minlength: "Минимум 10 цифр",



				maxlength: "Не более 10 цифр"



			},



			email2: {



				required: "Введите адресс эл. почты",



				email: "Введите корректный адрес"



			},



			select_hidden: "Выберите автомобиль",



			date2: "Выберите дату",



			ftime2: "Выберите время",



			address2: {



				required: "Укажите адрес",



				maxlength: "Не более 80 букв"



			},



			stime2: "Выберите время окончания"



		},



		errorElement: "em",



		errorPlacement: function(e, t) {



			e.addClass("help-block"), "checkbox" === t.prop("type") ? e.insertAfter(t.parent("label")) : e.insertAfter(t)



		},



		highlight: function(e, t, r) {



			$(e).parents(".form-group").addClass("has-error").removeClass("has-success")



		},



		unhighlight: function(e, t, r) {



			$(e).parents(".form-group").addClass("has-success").removeClass("has-error")



		}



	}), $("#order1").validate({



		rules: {



			firstname5: {



				required: !0,



				lettersonly: !0,



				minlength: 2,



				maxlength: 20



			},



			tel5: {



				required: !0,



				number: !0,



				minlength: 10,



				maxlength: 10



			},



			email5: {



				required: !0,



				email: !0



			},



			select5: "required",



			date5: "required",



			ftime5: "required",



			address5: {



				required: !0,



				maxlength: 80



			},



			stime5: "required"



		},



		messages: {



			firstname5: {



				required: "Введите свое имя",



				lettersonly: "Только буквы",



				minlength: "Минимум 2 буквы",



				maxlength: "Не более 20 букв"



			},



			tel5: {



				required: "Введите ваш номер телефона",



				number: "Только цифры",



				minlength: "Минимум 10 цифр",



				maxlength: "Не более 10 цифр"



			},



			email5: {



				required: "Введите адресс эл. почты",



				email: "Введите корректный адрес"



			},



			select5: "Выберите автомобиль",



			date5: "Выберите дату",



			ftime5: "Выберите время",



			address5: {



				required: "Укажите адрес",



				maxlength: "Не более 80 букв"



			},



			stime5: "Выберите время окончания"



		},



		errorElement: "em",



		errorPlacement: function(e, t) {



			e.addClass("help-block"), "checkbox" === t.prop("type") ? e.insertAfter(t.parent("label")) : e.insertAfter(t)



		},



		highlight: function(e, t, r) {



			$(e).parents(".form-group").addClass("has-error").removeClass("has-success")



		},



		unhighlight: function(e, t, r) {



			$(e).parents(".form-group").addClass("has-success").removeClass("has-error")



		}



	}), $("#calculate").validate({



		rules: {



			firstname3: {



				required: !0,



				lettersonly: !0,



				minlength: 2,



				maxlength: 20



			},



			tel3: {



				required: !0,



				number: !0,



				minlength: 10,



				maxlength: 10



			},



			email3: {



				required: !0,



				email: !0



			},



			select3: "required",



			date3: "required",



			stime3: {



				required: !0,



				// number: !0,



				// maxlength: 2



			}



		},



		messages: {



			firstname3: {



				required: "Введите свое имя",



				lettersonly: "Только буквы",



				minlength: "Минимум 2 буквы",



				maxlength: "Не более 20 букв"



			},



			tel3: {



				required: "Введите ваш номер телефона",



				number: "Только цифры",



				minlength: "Минимум 10 цифр",



				maxlength: "Не более 10 цифр"



			},



			email3: {



				required: "Введите адресс эл. почты",



				email: "Введите корректный адрес"



			},



			select3: "Выберите автомобиль",



			date3: "Выберите дату",



			stime3: {



				required: "Укажите кол-во часов",



				number: "Только цифры",



				maxlength: "Не более 2 цифр"



			}



		},



		errorElement: "em",



		errorPlacement: function(e, t) {



			e.addClass("help-block"), "checkbox" === t.prop("type") ? e.insertAfter(t.parent("label")) : e.insertAfter(t)



		},



		highlight: function(e, t, r) {



			$(e).parents(".form-group").addClass("has-error").removeClass("has-success")



		},



		unhighlight: function(e, t, r) {



			$(e).parents(".form-group").addClass("has-success").removeClass("has-error")



		}



	}), e = $(".burger-container"), t = document.querySelector(".header"), e.on("click", function(e) {



		t.classList.toggle("menu-opened")



	}), $(".menu a").click(function() {



		setTimeout(function() {



			$(".header").removeClass("menu-opened")



		}, 200)



	}), $(".filt").click(function() {	



			



		$("#more").addClass('height_auto');		



		setTimeout(function() {



			$("#show-more").trigger("click");

			$('.catalog_img_item').height(width - 35);	



		}, 50)



	}), jQuery.datetimepicker.setLocale("ru"), $("#ftime2").datetimepicker({



		datepicker: !1,



		format: "H:i"



	}), $("#stime2").datetimepicker({



		datepicker: !1,



		format: "H:i"



	}), $("#date").datetimepicker({



		timepicker: !1,



		format: "d.m.Y",



		dayOfWeekStart: 1



	}), $("#date3").datetimepicker({



		timepicker: !1,



		format: "d.m.Y",



		dayOfWeekStart: 1



	}), $("#ftime5").datetimepicker({



		datepicker: !1,



		format: "H:i"



	}), $("#stime5").datetimepicker({



		datepicker: !1,



		format: "H:i"



	}), $("#date5").datetimepicker({



		timepicker: !1,



		format: "d.m.Y",



		dayOfWeekStart: 1



	}), $("#order, #order1, #callForm, #callForm1, #callForm2, #calculate").on("submit", function(e) {



		e.preventDefault();



		var t = $(this).attr("action"),



			r = $(this).serialize(),



			a = $(this).attr("id");



		$("#" + a).valid() && $.ajax({



			type: "POST",



			url: t,



			data: r,



			success: function(e) {



				res = JSON.parse(e), $("#" + a + " .isnull").empty(), "ok" == res.status ? ($("#" + a + " .form-group").removeClass("has-success"), $("#" + a + " .result").html(res.message), $("#" + a)[0].reset(), setTimeout(function() {



					$(".result").empty()



				}, 1e4), setTimeout(function() {



					$(".fancybox-close-small").click()



				}, 10500)) : $("#" + a + " .isnull." + res.status).html(res.message)



				window.location.href = "https://arenda-mercedes.kiev.ua/thanks.html"



			}



		})



	});



	var n = (new Date).getFullYear();



	$(".year-now").html(n);



	



	var width = $('.mix').width();



	$('.catalog_img_item').height(width - 35);







});







$( window ).resize(function() {



	// console.log('khjk');	



	var w = $('.catalog_img_item').width();



	/*$('.catalog_img_item').height(w - 35);*/



});



// $(window).on('resize', function(){

//         if($(window).width() < 425){

//           $('#main').css({

//             'padding-top': $('.navbar').outerHeight()

//           });

//         } else{

//           $('#main').css({

//             'padding-top': 0

//           });

//         }

//       });

//       $(document).ready(function(){

//         if($(window).width() < 425){

//           $('#main').css({

//             'padding-top': $('.navbar').outerHeight()

//           });

//         } else{

//           $('#main').css({

//             'padding-top': 0

//           });

//         }    

// 		});

	  

	  $(document).ready(function() {



		



		if(window.location.href === "https://arenda-mercedes.kiev.ua/?buses"){

			$('html, body').animate({

			scrollTop: $(".menu_cars").offset().top

		  }, 1000, function() {

			   $('.menu_cars .filter:last-child').trigger( "click" );

		  })

		  }

	  });



	  $(document).ready(function() {
	$(".fancybox-thumb").fancybox({
		prevEffect	: 'none',
		nextEffect	: 'none',
		helpers	: {
			title	: {
				type: 'outside'
			},
			thumbs	: {
				width	: 50,
				height	: 50
			}
		}
	});
});