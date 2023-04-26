<div class="bl3">
	<div class="bl_c">
		<div class="head_c txt_c">
			<div class="head_v1">
				<div class="head_vt" data-aos="fade-up"><?=t::w('Rest stages')?></div>
				<h4 data-aos="fade-up" data-aos-delay="100"><?=t::w('bl3_p')?></h4>
			</div>
		</div>
	</div>

	<div class="bl3s">
		<div class="bl3_c swiper-container">
			<div class="swiper-wrapper">
				<?php
					$sql = db::query("select * from `blocks` where type = 'bl3' and lang = '$lang' ORDER BY number ASC");
			      while($ana = mysqli_fetch_array($sql)){
			      	echo '			
			      		<div class="swiper-slide bl3_i" data-aos="fade-up">
			      			<div class="bl3_img lz_bl3" data-src="/assets/img/bag/'.$ana['img'].'"></div>
			      			<div class="bl3_ic">
			      				<div class="bl3_icn">'.$ana['number'].'</div>
			      				<h6 class="bl3_ich">'.$ana['txt1'].'</h6>
			      			</div>
			      		</div>
						';
			      }
				?>
			</div>
	  	</div>
		<div class="swiper-button-prev bl3_prev"><div class="btn btn_sqr"><i class="fal fa-chevron-left"></i></div></div>
		<div class="swiper-button-next bl3_next"><div class="btn btn_sqr"><i class="fal fa-chevron-right"></i></div></div>
	</div>
</div>