<? include 'config/core.php';

	// site setting
	$menu_name = 'home';
	$site_set['header_wh'] = true;
	$site_set['header_logo'] = 'cl';
	$site_set['visible'] = 'after';

?>
<? include 'block/header.php'; ?>

	<!--  -->
	<div class="bl1">
		<div class="bl1_a lazy_bag" data-src="/assets/img/bag/bl34.jpg"></div>

		<div class="bl_c">
			<div class="bl1_c">
				<div class="bl1_offer" data-aos="fade-up" data-aos-delay="700"><h1><?=t::w('bl1_offer')?></h1></div>
				<div class="bl1_disc" data-aos="fade-up" data-aos-delay="800"><p><?=t::w('bl1_disc')?></p></div>

				<div class="bl1_btn" data-aos="fade-up" data-aos-delay="900">
					<div class="btn disb_zab">
						<span><?=t::w('To get the consultation')?></span>
						<div class="bl1_btn_a" data-aos="fade-up" data-aos-delay="1000">
							<div class="bl1_btn_ab lazy_bag" data-src="/assets/img/icons/19384_12.png"></div>
							<span><?=t::w('bl1_sale')?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--  -->
	<div class="bl7" id="bl2">
		<div class="bl_c">
			<div class="head_c txt_c">
				<div class="head_v1">
					<div class="head_vt" data-aos="fade-up"><?=t::w('Our advantages')?></div>
					<h3 data-aos="fade-up" data-aos-delay="100"><?=t::w('bl7_of2')?></h3>
				</div>
			</div>
			<div class="bl7_c">
				<?php
					$sql = db::query("select * from `blocks` where type = 'bl7' and lang = '$lang' ORDER BY number ASC");
				while($ana = mysqli_fetch_array($sql)){
					echo '
							<div class="bl7_i" data-aos="fade-up">
								<div class="bl7_img lazy_bag" data-src="/assets/img/bag/'.$ana['img'].'"></div>
								<h6 class="bl7_in">'.$ana['txt1'].'</h6>
								<p class="bl7_it">'.$ana['txt2'].'</p>
							</div>
						';
				}
				?>
			</div>
			<div class="bl7_b" data-aos="fade-up">
				<p><?=t::w('bl7_of3')?></p>
				<a target="_blank" href="https://wa.me/<?=$site['whatsapp']?>">
					<div class="btn btn_whatsapp"><i class="fab fa-whatsapp"></i><span><?=t::w('Write')?></span></div>
				</a>
			</div>
		</div>
	</div>

	<div class="bl2">
		<div class="bl_c">
			<div class="head_c txt_c">
				<div class="head_v1">
					<div class="head_vt" data-aos="fade-up"><?=t::w('bl2_of1')?></div>
					<h3 data-aos="fade-up" data-aos-delay="100"><?=t::w('bl2_of2')?></h3>
				</div>
			</div>
			<div class="bl2_con">
				<?php
					$sql = db::query("select * from `blocks` where type = 'bl2' and lang = '$lang' ORDER BY number ASC");
				while($ana = mysqli_fetch_array($sql)){
					echo '			
						<div class="bl2_i" data-aos="fade-up">
								<div class="bl2_img lazy_bag" data-src="/assets/img/icons/'.$ana['img'].'"></div>
								<h6 class="bl2_l">'.$ana['txt1'].'</h6>
								<div class="bl_raz">'.$ana['txt2'].'</div>
								<p class="bl2_r">'.$ana['txt3'].'</p>
							</div>
						';
				}
				?>
			</div>
			<div class="bl2_b" data-aos="fade-up">
				<p><?=t::w('bl2_of3')?></p>
				<a href="/catalog">
					<div class="btn"><span><?=t::w('View the sanatorium')?></span><i class="far fa-long-arrow-right"></i></div>
				</a>
			</div>
		</div>
	</div>

	<div class="bl8">
		<div class="bl_c">
			<div class="head_c txt_c"><h3 data-aos="fade-up"><?=t::w('bl8_ofc')?></h3></div>
			<div class="bl8_r">
				<?php
					$sql = db::query("select * from `blocks` where type = 'bl8' and lang = '$lang' ORDER BY number ASC");
				while($ana = mysqli_fetch_array($sql)){echo '<div class="bl8_rsi" data-aos="fade-up"><h4>'.$ana['txt1'].'</h4><p>'.$ana['txt2'].'</p></div>';}
				?>
			</div>

			<div class="bl8_c" data-aos="fade-up">
				<div class="head_c txt_c"><h4><?=t::w('bl8_of2')?></h4></div>
				<p class="bl8_l"><?=t::w('bl8_txt')?></p>
			</div>

			<div class="bl8_b" data-aos="fade-up">
				<div class="bl8_bl">
					<div class="bl8_bi"><i class="fas fa-calculator"></i></div>
					<p><?=t::w('bl8_b')?></p>
				</div>
				<div class="form_c">
					<div class="form_im dsp_n"><input type="text" class="sms" value="Рассчитать"></div>
					<div class="form_im"><input type="tel" placeholder="+7 (___) ___-__-__" class="form_im_txt phone ms_phone"></div>
					<div class="form_im"><div class="btn send"><span><?=t::w('CALCULATE NOW')?></span></div></div>
				</div>
			</div>
		</div>
	</div>

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

	<div class="bl4">
	<div class="bl_c">
	<form id="test1">
		<div class="bl4_con">

			<div class="head_c txt_c">
				<h4 data-aos="fade-up"><?=t::w('bl4_of')?></h4>
				<p data-aos="fade-up" data-aos-delay="100"><?=t::w('bl4_p')?></p>
			</div>

			<div class="bl4_cls swiper-container">
				<div class="gallery-pagination bl4_pag" data-aos="fade-up" data-aos-delay="150"></div>
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<h5 class="bl4_v" data-aos="fade-up" data-aos-delay="200"><?=t::w('tv1')?></h5>
						<div class="form_im form_imr">
							<div class="form_imri" data-aos="fade-up" data-aos-delay="250">
								<label class="radio" for="tv11">
									<input type="radio" name="tv1" value="1" id="tv11" checked>
									<span>1 <?=t::w('person')?></span>
								</label>
							</div>
							<div class="form_imri" data-aos="fade-up" data-aos-delay="300">
								<label class="radio" for="tv12">
									<input type="radio" name="tv1" value="2" id="tv12">
									<span>2 <?=t::w('person')?></span>
								</label>
							</div>
							<div class="form_imri" data-aos="fade-up" data-aos-delay="350">
								<label class="radio" for="tv13">
									<input type="radio" name="tv1" value="3-4" id="tv13">
									<span>3-4 <?=t::w('person')?></span>
								</label>
							</div>
							<div class="form_imri" data-aos="fade-up" data-aos-delay="400">
								<label class="radio" for="tv14">
									<input type="radio" name="tv1" value="<?=t::w('more')?>" id="tv14">
									<span><?=t::w('more')?></span>
								</label>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<h5 class="bl4_v"><?=t::w('tv2')?></h5>
						<div class="form_im form_imr">
							<div class="form_imri">
								<label class="radio" for="tv21">
									<input type="radio" name="tv2" value="5" id="tv21" checked>
									<span>5 <?=t::w('days')?></span>
								</label>
							</div>
							<div class="form_imri">
								<label class="radio" for="tv22">
									<input type="radio" name="tv2" value="7" id="tv22">
									<span>7 <?=t::w('days')?></span>
								</label>
							</div>
							<div class="form_imri">
								<label class="radio" for="tv23">
									<input type="radio" name="tv2" value="10" id="tv23">
									<span>10 <?=t::w('days')?></span>
								</label>
							</div>
							<div class="form_imri">
								<label class="radio" for="tv24">
									<input type="radio" name="tv2" value="<?=t::w('more2')?>" id="tv24">
									<span><?=t::w('more2')?></span>
								</label>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<h5 class="bl4_v"><?=t::w('tv3')?></h5>
						<div class="form_im form_imr">
							<div class="form_imri">
								<label class="radio" for="tv31">
									<input type="radio" name="tv3" value="эконом" id="tv31" checked>
									<span>Эконом</span>
								</label>
							</div>
							<div class="form_imri">
								<label class="radio" for="tv32">
									<input type="radio" name="tv3" value="Стандарт" id="tv32">
									<span>Стандарт</span>
								</label>
							</div>
							<div class="form_imri">
								<label class="radio" for="tv33">
									<input type="radio" name="tv3" value="Комфорт" id="tv33">
									<span>Комфорт</span>
								</label>
							</div>
							<div class="form_imri">
								<label class="radio" for="tv34">
									<input type="radio" name="tv3" value="Люкс" id="tv34">
									<span>Люкс</span>
								</label>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<h5 class="bl4_v"><?=t::w('tv4')?></h5>
						<div class="form_im"><input type="text" class="form_im_txt name" name="name" data-lenght="2" placeholder="<?=t::w('enter your name')?>" /></div>
						<div class="form_im"><input type="tel" class="form_im_txt phone phone2 ms_phone" name="phone" data-lenght="11" placeholder="<?=t::w('enter the number')?>" /></div>
					</div>
				</div>
				<div class="bl4_clb" data-aos="fade-up">
					<div class="gallery-prev"><div class="btn btn_back"><i class="far fa-angle-left"></i><span><?=t::w('back')?></span></div></div>
					<div class="gallery-next"><div class="btn btn_back"><span><?=t::w('farther')?></span><i class="far fa-angle-right"></i></div></div>
					<div class="gallery-send"><div class="btn btn_back test1"><span><?=t::w('pick up')?></span><i class="far fa-angle-right"></i></div></div>
				</div>
			</div>
		</div>
	</form>
	</div>
</div>

<!--  -->
<div class="bl5">
	<div class="bl_c">
		<div class="head_c txt_c">
			<div class="head_v1">
				<div class="head_vt" data-aos="fade-up"><?=t::w('OUR RECOMMENDATION')?></div>
				<h4 data-aos="fade-up" data-aos-delay="100"><?=t::w('bl5_of')?></h4>
			</div>
		</div>
		<div class="bl5_c">
			<?php
				$sql = db::query("select * from `sana` where sel is not null and number is not null ORDER BY `sana`.`number` ASC");
		      while($ana = mysqli_fetch_array($sql)){
		      	echo '
							<a href="/sana/?id='.$ana['id'].'" class="bl5_i" data-aos="fade-up">
								<div class="bl5_ia lazy_bag" data-src="/assets/uploads/sanatorium/'.$ana['img'].'?v='.$ver.'"></div>
								<div class="bl5_ic">
									<div class="bl5_ict">
										<div class="bl5_icn">'.$ana['name'].'</div>
										<div class="bl5_icts">'.t::rank($ana['rank']).'</div>
									</div>
									<div class="bl5_icb">
										<div class="bl5_icp">'.t::w('from1').t::p($ana['id']).' <i class="far fa-tenge"></i> '.t::w('from2').'</div>
										<div class="bl5_icbtn"><div class="btn btn_sqr"><i class="fal fa-long-arrow-right"></i></div></div>
									</div>
								</div>
							</a>
						';
		      }
			?>
		</div>
		<div class="bl5_b" data-aos="fade-up">
			<p><?=t::w('bl5_of2')?></p>
			<a href="/catalog"><div class="btn"><span><?=t::w('View all')?></span><i class="far fa-long-arrow-right"></i></div></a>
		</div>
	</div>
</div>

<div class="bl12">
	<div class="bl_c">
		<div class="head_c txt_c" data-aos="fade-up"><h3><?=t::w('bl12_off')?></h3></div>
		<div class="bl12_r2c">
			<?php
				$sql = db::query("select * from `blocks` where type = 'bl12' and lang = '$lang' ORDER BY number ASC");
		      while($ana = mysqli_fetch_array($sql)){
		      	echo '
						<div class="bl12_r2ci" data-aos="fade-up">
							<div class="bl12_r2cimg">'.$ana['img'].'</div>
							<h6 class="bl12_r2cic">'.$ana['txt1'].'</h6>
						</div>
		      	';
		      }
			?>
		</div>
		<div class="bl12_b" data-aos="fade-up">
			<p><?=t::w('bl12_b')?></p>
			<div class="btn disb_zab3"><span><?=t::w('Get a discount')?></span></div>
		</div>
	</div>
</div>

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

	<!-- -->
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

<div class="bl11">
	<div class="bl_c">
		<div class="bl11_c">
			<div class="bl11_l">
				<div class="head_c"><h4><?=t::w('Frequently asked Questions')?></h4></div>
				<p><?=t::w('bl11_disc')?></p>
				<div class="bl11_btn"><div class="btn disb_zab"><span><?=t::w('submit your')?></span></div></div>
				<div class="bl11_a lazy_bag" data-src="/assets/img/bag/doc2.png"></div>
			</div>
			<div class="bl11_r">
				<div class='faq'>
					<?php
						$sql = db::query("select * from `blocks` where type = 'bl11' and lang = '$lang' ORDER BY number ASC");
				      while($ana = mysqli_fetch_array($sql)){
				      	echo '
								<div class="faq-a">
							  		<div class="faq-ah">
										<div class="faq-arrow"><i class="fal fa-chevron-right"></i></div>
										<h6 class="faq-heading">'.$ana['txt1'].'</h6>
							  		</div>
							      <p class="faq-text">'.$ana['txt2'].'</p>
							  	</div>
				      	';
				      }
					?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="bl10">
	<div class="bl10_a lazy_bag" data-src="/assets/img/bag/bl11bag2.jpg"></div>
	<div class="bl10_abc">
		<div class="bl10_ab lazy_bag" data-src="/assets/img/bag/cloud_ab.png" style="--bl10:1"></div>
		<div class="bl10_ab lazy_bag" data-src="/assets/img/bag/cloud_ab.png" style="--bl10:2"></div>
		<div class="bl10_ab lazy_bag" data-src="/assets/img/bag/cloud_ab.png" style="--bl10:3"></div>
		<div class="bl10_ab lazy_bag" data-src="/assets/img/bag/cloud_ab.png" style="--bl10:4"></div>
		<div class="bl10_ab lazy_bag" data-src="/assets/img/bag/cloud_ab.png" style="--bl10:5"></div>
	</div>
	<div class="bl10_c" data-aos="fade-up">
		<div class="head_c txt_c">
			<h4><?=t::w('Still have questions?')?></h4>
			<p><?=t::w('bl10_w')?></p>
		</div>
		<div class="form_c">
			<div class="form_im dsp_n"><input type="text" class="sms" value="Консультация 2"></div>
			<div class="form_im"><input type="tel" placeholder="+7 (___) ___-__-__" class="form_im_txt phone ms_phone"></div>
			<div class="form_im"><div class="btn send"><span><?=t::w('submit your')?></span></div></div>
		</div>
	</div>
</div>

<? include 'block/footer.php'; ?>