<?php include '../config/core.php';

	// site setting
	$menu_name = 'catalog';
	$site_set = [
		'tabs' => true,
		'css' => true,
		'js' => true,
	];

?>
<?php include '../block/header.php'; ?>


<div class="blc1">
	<div class="bl_c">
		<div class="head_c">
			<h4 class="txt_tu txt_c">Выбор санаторий</h4>
			<div class="head_ln">
				<ul>
					<li><a href="/">Главная</a></li>
					<span><i class="fal fa-angle-right"></i></span>
					<li>Выбор санаторий</li>
				</ul>
			</div>
<!-- 			<div class="head_btn">
				<div class="btn btn_sqr btn_filtr"><i class="far fa-sliders-v"></i></div>
			</div> -->
		</div>
	</div>
</div>



<div class="blc2">
	<div class="bl_c">
		<div class="blc2_c">
			<div class="blc2_t">
				<div class="blc2_ttc">
					<div class="blc2_tth">персон:</div>
					<div class="blc2_tti">
						<div class="blc2_ttic"><i class="far fa-user-friends"></i></div>
						<p><span>2</span> взрослый</p>

						<div class="blc2_ttca">
							<div class="blc2_ttca_c">
								<div class="blc2_ttca_i">
									<div class="btn btn_sqr2"><i class="far fa-plus"></i></div>
									<div class="blc2_ttca_is"><span>2</span></div>
									<div class="btn btn_sqr2"><i class="far fa-minus"></i></div>
								</div>
								<div class="blc2_ttca_i">
									<div class="btn btn_sqr2"><i class="far fa-plus"></i></div>
									<div class="blc2_ttca_is"><span>0</span></div>
									<div class="btn btn_sqr2"><i class="far fa-minus"></i></div>
								</div>
							</div>
						</div>

					</div>
				</div>
				<div class="blc2_ttc">
					<div class="blc2_tth">продолжительность:</div>
					<div class="blc2_tti">
						<div class="blc2_ttic"><i class="far fa-moon"></i></div>
						<p>на <span>5</span> ночей</p>

						<div class="blc2_ttca">
							<div class="blc2_ttca_c2">
								<div class="blc2_ttca_i">5 ночей</div>
								<div class="blc2_ttca_i">6 ночей</div>
								<div class="blc2_ttca_i">7 ночей</div>
								<div class="blc2_ttca_i">8 ночей</div>
								<div class="blc2_ttca_i">9 ночей</div>
								<div class="blc2_ttca_i">10 ночей</div>
								<div class="blc2_ttca_i">болшее</div>
							</div>
						</div>

					</div>
				</div>
<!-- 				<div class="blc2_ttc">
					<div class="blc2_tth">за ночь:</div>
					<div class="blc2_tti">
						<div class="blc2_ttic"><i class="far fa-tenge"></i></div>
						<p>от <span>5 000</span></p>
					</div>
				</div> -->
				<div class="blc2_ttc">
					<div class="blc2_tth">звезд:</div>
					<div class="blc2_tti2">
						<div class="blc2_tts"><span>5</span><i class="far fa-star"></i></div>
						<div class="blc2_tts"><span>4</span><i class="far fa-star"></i></div>
						<div class="blc2_tts"><span>3</span><i class="far fa-star"></i></div>
					</div>
				</div>
<!-- 				<div class="blc2_ttc">
					<div class="blc2_tth">СОРТИРОВАТЬ:</div>
					<div class="blc2_tti">
						<div class="blc2_ttic"><i class="far fa-sort"></i></div>
						<p>по популярности</p>
					</div>
				</div> -->
				<div class="blc2_ttc"><div class="btn"><i class="far fa-search"></i><span>искать</span></div></div>
			</div>

			<div class="blc2_b">
				<?php
					$sql = db::query("select * from `sana` where number is not null ORDER BY `sana`.`number` ASC");
			      while($ana = mysqli_fetch_array($sql)){
			      	echo '
							<a href="/sana/?id='.$ana['id'].'" class="bl5_i">
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

		</div>
	</div>
</div>




<!-- block 10 -->
<?php include '../standart/bl10.php'; ?>



<?php include '../block/footer.php'; ?>