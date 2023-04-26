<div class="bl6">
	<div class="bl_c">
		<div class="bl6_c">
			<div class="bl6_r">
				<div class="bl6_ls">
					<?php
						$sql = db::query("select * from `blocks` where type = 'bl6' and lang = '$lang' ORDER BY number ASC");
				      while($ana = mysqli_fetch_array($sql)){
				      	echo '
								<div class="bl6_lsi">
									<div class="bl6_lsimg lazy_bag" data-src="/assets/img/icons/'.$ana['img'].'"></div>
									<div class="bl6_lsin">'.$ana['txt1'].'</div>
								</div>
							';
				      }
					?>
				</div>
				<!-- <div class="bl6_rm lazy_bag" data-src="/assets/img/bag/glass.png"></div> -->
			</div>
			<div class="bl6_l">
				<div class="head_c txt_r">
					<div class="head_v1">
						<div class="head_vt2">Наш гордость</div>
						<h2><?=t::w('Mineral water')?></h2>
					</div>
				</div>
				<div class="bl6_lc"><?=t::w('bl6_txt1')?></div>

				<!-- Спливка жасау -->
				<div class="bl6_btn"><div class="btn"><?=t::w('Get well')?><div class="btn_img"><div class="lazy_bag" data-src="/assets/img/icons/droplet_1f4a7.png"></div></div></div></div>
			</div>
		</div>
	</div>
</div>