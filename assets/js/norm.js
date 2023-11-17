window.onload =()=> {
	setTimeout(function () {
		$(".preload").addClass('preloader_act')
		setTimeout(function(){$(".preload").addClass('dsp_n')}, 300)
	}, 500)
}


// 
$(document).ready(function() {


	// lazy load 
	$('.lazy_logo').lazy()
	$('.lazy_bag').lazy({effect:"fadeIn",effectTime:500,threshold:0})
	$('.lazy_img').lazy({effect:"fadeIn",effectTime:500,threshold:0})
	$('.lz_bl3').lazy({effect:"fadeIn",effectTime:500,threshold:0})
	$('.lz_bl7').lazy({effect:"fadeIn",effectTime:500,threshold:0})
	$('.lz_bl13').lazy({effect:"fadeIn",effectTime:500,threshold:0})
	$('.lazy_rev').lazy({effect:"fadeIn",effectTime:500,threshold:0})


	// 
	$('.clc_top').click(function(){$('body,html').animate({scrollTop:0},1000)})




	// mask form
	$('.fr_code').mask('0000');
	$('.fr_age').mask('00');
	$('.fr_number').mask('# ##0', {reverse: true});
	$('.fr_days').mask('000 күн', {reverse: true});
	$('.fr_price').mask('#.##0 тг', {reverse: true});
	$('.fr_phone').mask('8 (000) 000-00-00');
	$('.fr_phone2').mask('+7 (000) 000-00-00');
	$('.fr_metrika').mask('00 000 000');
	$('.fr_pixel').mask('000 000 000 000 000');
	

	//
	$('html').on('input', 'input[type*="text"], input[type*="password"], input[type*="url"]', function() {
		$(this).attr('data-val', $(this).val())
		if ($(this).attr('data-lenght') <= $(this).val().length) {
			$(this).attr('data-sel', 1);
		} else {$(this).attr('data-sel',0)}
	});
	$('html').on('input', 'input[type*="tel"]', function() {
		var val = $(this).val().replace(/_/g, '').replace(/ /g, '').replace(/-/g, '').replace(/\(/g, '').replace(/\)/g, '').replace(/\+/g, '').replace(/тг/g, '').replace(/\./g, '')
		$(this).attr('data-val', val)
		if ($(this).attr('data-lenght') <= val.length) {
			$(this).attr('data-sel', 1);
		} else {$(this).attr('data-sel',0)}
	});
	$('html').on('input', 'input.youtube', function(){
		val = $(this).val().replace('https://', '').replace('www.', '').replace('youtube.com/watch?v=', '').replace('youtu.be/', '').replace(/\&.*/, '');
		$(this).attr('data-val', val);
	})
	$('html').on('input', 'input.fr_days', function(){
		val = $(this).val().replace(' күн', '');
		$(this).attr('data-val', val);
	})

	//
	$('.form_icon_pass').on('click', function() {
		if ($(this).siblings('.password').attr('data-eye') == 0) {
			$(this).siblings('.password').attr('type', 'text')
			$(this).siblings('.password').attr('data-eye', '1')
			$(this).addClass('fa-eye')
			$(this).removeClass('fa-eye-slash')
		} else {
			$(this).siblings('.password').attr('type', 'password')
			$(this).siblings('.password').attr('data-eye', '0')
			$(this).removeClass('fa-eye')
			$(this).addClass('fa-eye-slash')
		}
	})


	// 
	$('html').on('click', '.sel_clc', function() {
		if ($(this).hasClass('form_sel_act') == false) {
			$('.sel_clc').removeClass('form_sel_act')
			$(this).addClass('form_sel_act')
		} else $(this).removeClass('form_sel_act')
	});
	$('html').on('click', '.sel_clc_i .form_im_seli', function() {
		$(this).parent().siblings('.sel_clc').attr('data-val', $(this).attr('data-val'))
		$(this).parent().siblings('.sel_clc').html($(this).html())
		$(this).parent().siblings('.sel_clc').removeClass('form_sel_act')
	});

	// 
	$('html').on('click', '.form_im_toggle_btn', function() {
		if ($(this).hasClass('form_im_toggle_act') == true) $(this).siblings('input').attr('data-val', 0)
		else $(this).siblings('input').attr('data-val', 1)
		$(this).toggleClass('form_im_toggle_act')
	});


	

	// 
	// AOS.init({duration:500,once:true});

})