<div class="bl9">
	<div class="bl_c">
		<div class="head_c txt_c">
			<div class="head_v1">
				<div class="head_vt" data-aos="fade-up"><?=t::w('Guest Reviews')?></div>
				<h4 data-aos="fade-up" data-aos-delay="100"><?=t::w('bl9_of2')?></h4>
			</div>
		</div>
		<div class="bl9_c">
			<div class="swiper-container bl9_con">
				<div class="swiper-wrapper">
					<?php
						$sql = db::query("select * from `review`");
				      while($ana = mysqli_fetch_array($sql)){
							echo '
								<div class="swiper-slide bl9_i" data-aos="fade-up">
									<div class="bl9_iln">
										<div class="bl9_iln2">
											<div class="bl9_ilogo lazy_rev" data-src="/assets/img/reviews/'.$ana['logo'].'"></div>
											<div class="bl9_ilc"><div class="bl9_ilname">'.$ana['name'].'</div><div class="bl9_ils">'.t::w('source:').$ana['sn'].'</div></div>
										</div>
										<div class="bl9_ildt">
											'.($ana['star']==5?'<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>':'<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>').'
										</div>
									</div>
									<p class="bl9_it">'.$ana['txt'].'</p>
								</div>
							';
						}
					?>
				</div>
			</div>
 			<div class="swiper-button-prev bl9_prev"><div class="btn btn_sqr"><i class="fal fa-chevron-left"></i></div></div>
			<div class="swiper-button-next bl9_next"><div class="btn btn_sqr"><i class="fal fa-chevron-right"></i></div></div>
		</div>
		<div class="bl9_b" data-aos="fade-up">
			<p><?=t::w('bl9_of3')?></p>
			<a target="_blank" href="https://wa.me/<?=$site['whatsapp']?>"><div class="btn"><?=t::w('Communication')?></div></a>
		</div>
	</div>
</div>