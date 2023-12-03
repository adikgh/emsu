<? include 'config/core.php';

	// site setting
	$menu_name = 'home';
	$site_set['header_wh'] = true;
	$site_set['header_logo'] = 'cl';
	$site_set['visible'] = 'after';
	$site_set['swiper'] = true;
	// $site_set['swiper'] = true;
	
?>
<? include 'block/header.php'; ?>

	<!--  -->
	<div class="bl1">
		<div class="bl1_a lazy_bag" data-src="/assets/img/bag/bl34.jpg"></div>

		<div class="bl_c">
			<div class="bl1_c">
				<div class="bl1_offer"><h1><?=t::w('bl1_offer')?></h1></div>
				<div class="bl1_disc"><p><?=t::w('bl1_disc')?></p></div>

				<div class="bl1_btn">
					<div class="btn disb_zab">
						<span><?=t::w('To get the consultation')?></span>
						<div class="bl1_btn_a">
							<div class="bl1_btn_ab lazy_bag" data-src="/assets/img/icons/19384_12.png"></div>
							<span><?=t::w('bl1_sale')?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<!--  -->
	<? include 'bl4.php'; ?>


	<!--  -->
	<div class="bl7" id="bl2">
		<div class="bl_c">
			<div class="head_c txt_c">
				<div class="head_v1">
					<div class="head_vt"><?=t::w('Our advantages')?></div>
					<h3><?=t::w('bl7_of2')?></h3>
				</div>
			</div>
			<div class="bl7_c">
				<?php
					$sql = db::query("select * from `blocks` where type = 'bl7' and lang = '$lang' ORDER BY number ASC");
				while($ana = mysqli_fetch_array($sql)){
					echo '
							<div class="bl7_i">
								<div class="bl7_img lazy_bag" data-src="/assets/img/bag/'.$ana['img'].'"></div>
								<h6 class="bl7_in">'.$ana['txt1'].'</h6>
								<p class="bl7_it">'.$ana['txt2'].'</p>
							</div>
						';
				}
				?>
			</div>
			<div class="bl7_b">
				<p><?=t::w('bl7_of3')?></p>
				<a target="_blank" href="https://wa.me/<?=$site['whatsapp']?>">
					<div class="btn btn_whatsapp"><i class="fab fa-whatsapp"></i><span><?=t::w('Write')?></span></div>
				</a>
			</div>
		</div>
	</div>

	<!--  -->
	<div class="bl5">
		<div class="bl_c">
			<div class="head_c txt_c">
				<div class="head_v1">
					<div class="head_vt"><?=t::w('OUR RECOMMENDATION')?></div>
					<h4><?=t::w('bl5_of')?></h4>
				</div>
			</div>
			<div class="bl5_c">
				<? $sana = db::query("select * from `sana` where sel is not null and number is not null ORDER BY `sana`.`number` ASC"); ?>
				<? while ($sana_d = mysqli_fetch_array($sana)): ?>
					<a href="/sana/?id=<?=$sana_d['id']?>" class="bl5_i">
						<div class="bl5_ia lazy_bag" data-src="/assets/uploads/sanatorium/<?=$sana_d['img'].'?v='.$v?>"></div>
						<div class="bl5_ic">
							<div class="bl5_ict">
								<div class="bl5_icn"><?=$sana_d['name']?></div>
								<div class="bl5_icts"><?=@t::rank($sana_d['rank'])?></div>
							</div>
							<div class="bl5_icb">
								<div class="bl5_icp">
									<?=@t::w('from1').@t::p($sana_d['id'])?>
									<i class="far fa-tenge"></i>
									<?=@t::w('from2')?>
								</div>
								<div class="bl5_icbtn">
									<div class="btn btn_sqr">
										<i class="fal fa-long-arrow-right"></i>
									</div>
								</div>
							</div>
						</div>
					</a>
				<? endwhile ?>
			</div>
			<div class="bl5_b">
				<p><?=t::w('bl5_of2')?></p>
				<a href="/catalog"><div class="btn"><span><?=t::w('View all')?></span><i class="far fa-long-arrow-right"></i></div></a>
			</div>
		</div>
	</div>

	<!-- bl2 / ДЛЯ КОГО НАШИ САНАТОРИЙ? -->

	<!-- bl8 / Наш опыт в цифрах -->

	<div class="bl13">
		<div class="swiper-container bl13_c">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="bl_c">
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
			</div>
		</div>
	</div>





	<!-- bl12 / При бронировании мы принимаем: -->

	<!-- bl3 / ЭТАПЫ ОТДЫХА -->

	<!-- -->
	<div class="bl9">
		<div class="bl_c">
			<div class="head_c txt_c">
				<div class="head_v1">
					<div class="head_vt"><?=t::w('Guest Reviews')?></div>
					<h4><?=t::w('bl9_of2')?></h4>
				</div>
			</div>
			<div class="bl9_c">
				<div class="swiper-container bl9_con">
					<div class="swiper-wrapper">
						<?php
							$sql = db::query("select * from `review`");
						while($ana = mysqli_fetch_array($sql)){
								echo '
									<div class="swiper-slide bl9_i">
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
			<div class="bl9_b">
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


<? include 'block/footer.php'; ?>