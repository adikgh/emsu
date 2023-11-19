// if (window.matchMedia("(max-width: 768px)").matches) { }

$(document).ready(function() {


	// 
	// setTimeout(function() {
	// 	$('.preloader').animate({
	// 		opacity : 0
	// 	}, 500, function () {
	// 		$(this).css('display', 'none')
	// 	})
	// }, 500)


	// 
	$('.menu_pj').click(function(){
		$('.header').toggleClass('trs_act')
		$('.body').toggleClass('trs_act')
		$('.footer').toggleClass('trs_act')
		$('.menu_ph').toggleClass('trs_act')
	})
	$('.menu_back, .menu_phi a').click(function(){
		$('.header').removeClass('trs_act')
		$('.body').removeClass('trs_act')
		$('.footer').removeClass('trs_act')
		$('.menu_ph').removeClass('trs_act')
	})


	// 
	let scroll = $(window).scrollTop();
	if (scroll > 400) {$('.tabs_f').addClass('tabs_act')}else{$('.tabs_f').removeClass('tabs_act')}
	$(window).scroll(function() {
    	scroll = $(window).scrollTop();
		if (scroll > 400) {$('.tabs_f').addClass('tabs_act')}else{$('.tabs_f').removeClass('tabs_act')}
	})












	// СМС +
	$('.orderSend').on('click', function() {

		var sms = $(this).parent().siblings().children('.sms')
		var name = $(this).parent().siblings().children('.name')
		var phone = $(this).parent().siblings().children('.phone')

		if (name.attr('data-pr') != 1 || phone.attr('data-pr') != 1) { mess('Введите свой данный') } 
		else {
			$.ajax({
				url: "/config/send.php?mess",
				type: "POST",
				dataType: "html",
				data: ({sms:sms.val(),name:name.val(),phone:phone.val()}),
				success: function(data){
					if (data == 'yes') { 
						mess('Успешно отправлено')
						phone.val('')
						phone.attr('data-pr', 0)
						name.val('')
						name.attr('data-pr', 0)
					} else {
						mess('Пожалуйста, перезагрузите сайт <br>и попробуйте еще раз')
						console.log(data);
					}
				},
				beforeSend: function(){ mess('Отправка..') },
				error: function(data){ mess('Ошибка..') }
			})
		}
	})



	// 
	$('.send').on('click', function() {

		var sms = $(this).parent().siblings().children('.sms')
		var phone = $(this).parent().siblings().children('.phone')

		if (phone.attr('data-pr') != 1) { mess('Введите свой данный') } 
		else {
			$.ajax({
				url: "/config/send.php?sms",
				type: "POST",
				dataType: "html",
				data: ({sms:sms.val(),phone:phone.val()}),
				success: function(data){
					if (data == 'yes') { 
						mess('Успешно отправлено')
						phone.val('')
						phone.attr('data-pr', 0)
					} else {
						mess('Пожалуйста, перезагрузите сайт <br>и попробуйте еще раз')
					}
				},
				beforeSend: function(){ mess('Отправка..') },
				error: function(data){ mess('Ошибка..') }
			})
		}
	})


	$('.test1').on('click', function() {

		var msg = $('#test1').serialize();
		var phone = $('.phone2')

		if (phone.attr('data-pr') != 1) {
			mess('Введите свой данный')
		} else {
			$.ajax({
				url: "/config/send.php?test1",
				type: "POST",
				data: msg,
				success: function(data){
					if (data == 'yes') { 
						mess('Успешно отправлено')
						$(location).attr('href', '/catalog/');
					} else {
						mess('Пожалуйста, перезагрузите сайт <br>и попробуйте еще раз')
					}
				},
				beforeSend: function(){ mess('Отправка..') },
				error: function(data){ mess('Ошибка..') }
			})
		}
	})









   var bl13_c = new Swiper('.bl13_c', {
      slidesPerView: 1,
      autoHeight: true,
      navigation:{nextEl:'.bl13_next',prevEl:'.bl13_prev'},
      pagination:{el:'.bl13_pagination',dynamicBullets:true},
      on:{slideChange:function(){$('.lz_bl13').lazy({effect:"fadeIn",effectTime:500,threshold:0})}},
   })
   var bl4_cls = new Swiper('.bl4_cls', {
   	effect: 'fade',
   	autoHeight: true,
   	allowTouchMove: false,
   	fadeEffect:{crossFade:true},
      navigation:{nextEl:'.gallery-next',prevEl:'.gallery-prev'},
      pagination:{el:'.bl4_pag',type:'progressbar'},
   })
	var bl9_con = new Swiper('.bl9_con', {
      slidesPerView: 'auto',
      spaceBetween: 30,
      autoHeight: true,
      navigation:{nextEl:'.bl9_next',prevEl:'.bl9_prev'},
      on:{slideChange:function(){$('.lazy_rev').lazy({effect:"fadeIn",effectTime:500,threshold:0})}},
   })
	var bl3_c = new Swiper('.bl3_c', {
      slidesPerView: 'auto',
      grabCursor: true,
      centeredSlides: true,
      navigation:{nextEl:'.bl3_next',prevEl:'.bl3_prev'},
      on:{slideChange:function(){$('.lz_bl3').lazy({effect:"fadeIn",effectTime:500,threshold:0})}},
   })




   // 
	$('.disb_zab').click(function(){$('.fr').addClass('pop_bl_act')})
	$('.zabr_back').click(function(){$('.fr').removeClass('pop_bl_act')})

	// 
	$('.disb_zab2').click(function(){$('.fr2').addClass('pop_bl_act')})
	$('.zabr_back2').click(function(){$('.fr2').removeClass('pop_bl_act')})

	// 
	$('.disb_zab3').click(function(){$('.fr3').addClass('pop_bl_act')})
	$('.zabr_back3').click(function(){$('.fr3').removeClass('pop_bl_act')})

	// 
	$('.disb_zab4').click(function(){
		$('.fr4').addClass('pop_bl_act')
		$('.fr4 .sms1').val($(this).attr('data-name'))
		$('.fr4 .sms2').val($(this).attr('data-number'))
	})
	$('.zabr_back4').click(function(){$('.fr4').removeClass('pop_bl_act')})

	// 
	$('.disb_zab5').click(function(){$('.fr5').addClass('pop_bl_act')})
	$('.zabr_back5').click(function(){$('.fr5').removeClass('pop_bl_act')})



	// 
	$('.faq-a').each(function(){$(this).height($(this).children('.faq-ah').height())})
	$('.faq-a').on('click', function(e) {
		e.preventDefault();
		if ($(this).hasClass('faq-act') == true) {
			$(this).removeClass('faq-act')
			$(this).height($(this).children('.faq-ah').height())
		} else {
			$(this).addClass('faq-act')
			$(this).height($(this).children('.faq-text').height() + $(this).children('.faq-ah').height() + 30)
		}
	});




})