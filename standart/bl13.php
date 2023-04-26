<div class="bl13">
	<div class="swiper-container bl13_c">
	   <div class="swiper-wrapper">
	      <div class="swiper-slide">
	      	<div class="bl_c" data-aos="fade-up">
		      	<div class="bl131_c">
						<div class="bl13_l">
							<div class="head_c">
								<h3><?=t::w('bl13_1o')?></h3>
								<p><?=t::w('bl13_1p')?></p>
							</div>
							<div class="btn disb_zab2"><span><?=t::w('give')?></span></div>
						</div>
						<div class="bl13_r"><div class="bl13_ri lz_bl13" data-src="assets/img/bag/10шт..jpg"></div></div>
					</div>
	      	</div>
	      </div>
	      <div class="swiper-slide bl13_sw3">
	      	<div class="bl_c">
					<div class="head_c txt_c">
						<div class="head_v1">
							<div class="head_vt"><?=t::w('Our pride')?></div>
							<h3><?=t::w('Mineral water')?></h3>
						</div>
					</div>
	      		<div class="bl6_c">
						<div class="bl6_r">
							<div class="bl6_ls">
								<?php
									$sql = db::query("select * from `blocks` where type = 'bl6' and lang = '$lang' ORDER BY number ASC");
							      while($ana = mysqli_fetch_array($sql)){
							      	echo '
											<div class="bl6_lsi">
												<div class="bl6_lsimg lz_bl13" data-src="/assets/img/icons/'.$ana['img'].'"></div>
												<div class="bl6_lsin">'.$ana['txt1'].'</div>
											</div>
										';
							      }
								?>
							</div>
						</div>
						<div class="bl6_l"><div class="bl6_lc"><?=t::w('bl6_txt1')?></div></div>
					</div>
					<div class="bl6_btn">
						<div class="bl6_btn2">
							<div class="btn"><?=t::w('Get well')?></div>		
						</div>
					</div>
	      	</div>
	      </div>
	      <!-- <div class="swiper-slide"><div class="bl_c"></div></div> -->
	   </div>
	   <div class="swiper-pagination bl13_pagination"></div>
	   <div class="swiper-button-next bl13_next"><div class="btn btn_sqr"><i class="fal fa-chevron-right"></i></div></div>
	   <div class="swiper-button-prev bl13_prev"><div class="btn btn_sqr"><i class="fal fa-chevron-left"></i></div></div>
	</div>
</div>