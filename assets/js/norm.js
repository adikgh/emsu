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


	// 
	AOS.init({duration:500,once:true});

})